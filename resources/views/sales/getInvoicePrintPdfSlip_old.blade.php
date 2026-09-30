@php
    $money = fn ($value) => number_format((float) $value, 2);

    $formatDate = fn ($value) => $value
        ? \Illuminate\Support\Carbon::parse($value)->format('d M Y')
        : '—';

    $invoiceNumber = $paymentprint->order_number ?: $paymentprint->id;

    $package = ucfirst((string) ($paymentprint->package_name ?: 'Package'));

    $customerName = trim(implode(' ', array_filter([
        $client->sirName,
        $client->first_name,
        $client->last_name,
    ])));

    $logoPath = public_path('client/images/small-logo.png');

    $logoSrc = !empty($imageSrc)
        ? $imageSrc
        : (is_file($logoPath) ? $logoPath : null);

    $paymentMode = ucfirst((string) ($paymentprint->payment_mode ?: 'NA'));

    $bankReference = null;

    if (!empty($paymentprint->payment_bank)) {
        $bankReference = ucfirst($paymentprint->payment_bank);
    } elseif (!empty($paymentprint->chq_card_no)) {
        $bankReference = 'Cheque: '.$paymentprint->chq_card_no;
    } elseif (!empty($paymentprint->pay_paytm)) {
        $bankReference = 'Paytm: '.$paymentprint->pay_paytm;
    } elseif (!empty($paymentprint->pay_neft)) {
        $bankReference = 'NEFT: '.$paymentprint->pay_neft;
    } elseif (!empty($paymentprint->pay_googlePay)) {
        $bankReference = 'GPay: '.$paymentprint->pay_googlePay;
    }
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice — {{ $invoiceNumber }}</title>

    <style>
        @page {
            margin: 24px 28px;
        }

        body {
            margin: 0;
            font-family: "DejaVu Sans", sans-serif;
            font-size: 9px;
            line-height: 1.4;
            color: #334155;
            background: #ffffff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, th {
            vertical-align: top;
            word-wrap: break-word;
        }

        p {
            margin: 0 0 4px;
        }

        .accent {
            height: 5px;
            margin-bottom: 16px;
            background: #2563eb;
        }

        .header {
            margin-bottom: 16px;
        }

        .brand {
            width: 60%;
            padding-right: 16px;
        }

        .logo {
            width: 125px;
            height: auto;
            max-height: 42px;
            margin-bottom: 8px;
        }

        .company-name {
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: bold;
            color: #0f172a;
        }

        .company-info {
            font-size: 8px;
            line-height: 1.5;
            color: #64748b;
        }

        .document {
            width: 40%;
            text-align: right;
        }

        .eyebrow {
            font-size: 8px;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #2563eb;
        }

        .document-title {
            margin: 4px 0 10px;
            font-size: 28px;
            line-height: 1.1;
            font-weight: bold;
            color: #0f172a;
        }

        .meta td {
            padding: 3px 0;
            font-size: 8px;
        }

        .meta-label {
            width: 44%;
            text-align: left;
            color: #64748b;
        }

        .meta-value {
            text-align: right;
            font-weight: bold;
            color: #0f172a;
        }

        .registration {
            margin-bottom: 16px;
            padding: 8px 10px;
            border: 1px solid #e2e8f0;
            background: #f1f5f9;
        }

        .registration td {
            width: 50%;
            padding: 2px 0;
            font-size: 7.5px;
        }

        .section {
            margin-bottom: 16px;
        }

        .section-title {
            margin: 0 0 7px;
            font-size: 9px;
            font-weight: bold;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: #2563eb;
        }

        .half {
            width: 50%;
        }

        .left {
            padding-right: 6px;
        }

        .right {
            padding-left: 6px;
        }

        .card {
            border: 1px solid #e2e8f0;
            background: #f8fafc;
        }

        .card-title {
            padding: 7px 10px;
            border-bottom: 1px solid #e2e8f0;
            background: #eff6ff;
            font-size: 8px;
            font-weight: bold;
            text-transform: uppercase;
            color: #1d4ed8;
        }

        .card-body {
            padding: 10px;
        }

        .business-name {
            margin-bottom: 7px;
            font-size: 11px;
            font-weight: bold;
            color: #0f172a;
        }

        .details {
            table-layout: fixed;
        }

        .details td {
            padding: 3px 0;
            font-size: 8px;
        }

        .details .label {
            width: 52px;
            color: #64748b;
        }

        .items {
            border: 1px solid #e2e8f0;
            table-layout: fixed;
        }

        .items th {
            padding: 9px 8px;
            background: #0f172a;
            color: #ffffff;
            font-size: 8px;
            text-align: left;
        }

        .items td {
            padding: 13px 8px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 9px;
        }

        .items .number {
            text-align: right;
            white-space: nowrap;
        }

        .package-name {
            margin-bottom: 4px;
            font-size: 11px;
            font-weight: bold;
            color: #0f172a;
        }

        .muted {
            font-size: 8px;
            color: #64748b;
        }

        .summary {
            margin-top: 12px;
        }

        .summary-left {
            width: 53%;
            padding-right: 14px;
        }

        .summary-right {
            width: 47%;
        }

        .words {
            padding: 10px;
            border-left: 3px solid #2563eb;
            background: #eff6ff;
            font-size: 8px;
        }

        .words-title {
            margin-bottom: 5px;
            font-size: 8px;
            font-weight: bold;
            text-transform: uppercase;
            color: #1d4ed8;
        }

        .totals td {
            padding: 6px 9px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 9px;
        }

        .totals .value {
            text-align: right;
            white-space: nowrap;
            font-weight: bold;
            color: #0f172a;
        }

        .totals .grand-total td {
            padding: 10px 9px;
            border: none;
            background: #2563eb;
            color: #ffffff;
            font-size: 11px;
            font-weight: bold;
        }

        .payment {
            padding: 8px 10px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
        }

        .payment-table {
            table-layout: fixed;
        }

        .payment-table td {
            padding: 4px 0;
            font-size: 8px;
        }

        .payment-table .label {
            width: 30%;
            color: #64748b;
        }

        .signature {
            padding-top: 12px;
            border-top: 1px solid #e2e8f0;
        }

        .signature-note {
            width: 60%;
            padding-right: 18px;
            font-size: 8px;
            color: #64748b;
        }

        .signature-name {
            width: 40%;
            text-align: right;
            font-size: 8px;
            color: #0f172a;
        }

        .signature-line {
            margin-top: 18px;
            padding-top: 5px;
            border-top: 1px solid #94a3b8;
        }

        .footer {
            margin-top: 16px;
            padding-top: 10px;
            border-top: 2px solid #0f172a;
        }

        .footer-left {
            width: 70%;
            padding-right: 12px;
            font-size: 7px;
            color: #64748b;
        }

        .footer-right {
            width: 30%;
            text-align: right;
            font-size: 7px;
            color: #64748b;
        }

        .thank-you {
            margin-bottom: 4px;
            font-size: 14px;
            font-weight: bold;
            color: #2563eb;
        }

        .keep-together {
            page-break-inside: avoid;
        }

        thead {
            display: table-header-group;
        }

        tr {
            page-break-inside: avoid;
        }
    </style>
</head>

<body>
    <div class="accent"></div>

    <table class="header">
        <tr>
            <td class="brand">
                @if ($logoSrc)
                    <img src="{{ $logoSrc }}" alt="QuickDials" class="logo">
                @endif

                <div class="company-name">
                    QuickDials Internet Pvt. Ltd.
                </div>

                <div class="company-info">
                    G-13, Third Floor, Sector-3,<br>
                    Noida, U.P. India — 201301<br>
                    +91-75-9543-9543<br>
                    info@quickdials.com | www.quickdials.com
                </div>
            </td>

            <td class="document">
                <div class="eyebrow">QuickDials / Billing</div>

                <h1 class="document-title">Invoice</h1>

                <table class="meta">
                    <tr>
                        <td class="meta-label">Invoice No.</td>
                        <td class="meta-value">{{ $invoiceNumber }}</td>
                    </tr>

                    <tr>
                        <td class="meta-label">Invoice Date</td>
                        <td class="meta-value">
                            {{ $formatDate($paymentprint->order_date) }}
                        </td>
                    </tr>

                    <tr>
                        <td class="meta-label">Generated On</td>
                        <td class="meta-value">
                            {{ now()->format('d M Y') }}
                        </td>
                    </tr>

                    <tr>
                        <td class="meta-label">Currency</td>
                        <td class="meta-value">INR</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <div class="registration keep-together">
        <table>
            <tr>
                <td><strong>GSTIN:</strong> 09AAECL0574H1ZG</td>
                <td><strong>PAN:</strong> AABCQ2259D</td>
            </tr>

            <tr>
                <td><strong>TAN:</strong> BLRQ01951F</td>
                <td><strong>CIN:</strong> U63112KA2026PTC215594</td>
            </tr>
        </table>
    </div>

    <div class="section keep-together">
        <h2 class="section-title">Customer Details</h2>

        <table>
            <tr>
                <td class="half left">
                    <div class="card">
                        <div class="card-title">Billed To</div>

                        <div class="card-body">
                            <div class="business-name">
                                {{ ucwords((string) $client->business_name) }}
                            </div>

                            <table class="details">
                                <tr>
                                    <td class="label">Phone</td>
                                    <td>{{ $client->mobile ?: 'N/A' }}</td>
                                </tr>

                                <tr>
                                    <td class="label">Email</td>
                                    <td>{{ $client->email ?: 'N/A' }}</td>
                                </tr>

                                <tr>
                                    <td class="label">PAN</td>
                                    <td>{{ $client->pan_no ?: 'N/A' }}</td>
                                </tr>

                                <tr>
                                    <td class="label">GSTIN</td>
                                    <td>{{ $client->gst_no ?: 'N/A' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>

                <td class="half right">
                    <div class="card">
                        <div class="card-title">Billing Address</div>

                        <div class="card-body">
                            <div class="business-name">
                                {{ $customerName ?: $client->business_name }}
                            </div>

                            <table class="details">
                                <tr>
                                    <td class="label">Address</td>
                                    <td>{{ $client->address ?: 'N/A' }}</td>
                                </tr>

                                @if (!empty($client->city))
                                    <tr>
                                        <td class="label">City</td>
                                        <td>{{ $client->city }}</td>
                                    </tr>
                                @endif

                                <tr>
                                    <td class="label">GSTIN</td>
                                    <td>{{ $client->gst_no ?: 'N/A' }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="section">
        <h2 class="section-title">Invoice Items</h2>

        <table class="items">
            <thead>
                <tr>
                    <th style="width: 8%;">No.</th>
                    <th style="width: 44%;">Package / Description</th>
                    <th class="number" style="width: 24%;">Package Rate</th>
                    <th class="number" style="width: 24%;">Amount</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>01</td>

                    <td>
                        <div class="package-name">{{ $package }}</div>
                        <div class="muted">QuickDials service package</div>
                    </td>

                    <td class="number">
                        ₹ {{ $money($paymentprint->paid_amount) }}
                    </td>

                    <td class="number">
                        <strong>
                            ₹ {{ $money($paymentprint->paid_amount) }}
                        </strong>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="summary keep-together">
            <tr>
                <td class="summary-left">
                    <div class="words">
                        <div class="words-title">Amount in Words</div>
                        {{ $paymentprint->paid_amt_in_words ?: '—' }}
                    </div>
                </td>

                <td class="summary-right">
                    <table class="totals">
                        <tr>
                            <td>Package Amount</td>
                            <td class="value">
                                ₹ {{ $money($paymentprint->paid_amount) }}
                            </td>
                        </tr>

                        <tr>
                            <td>GST</td>
                            <td class="value">
                                ₹ {{ $money($paymentprint->gst_tax) }}
                            </td>
                        </tr>

                        <tr>
                            <td>TDS</td>
                            <td class="value">
                                ₹ {{ $money($paymentprint->tds_amount) }}
                            </td>
                        </tr>

                        <tr class="grand-total">
                            <td>Total Amount</td>
                            <td class="value">
                                ₹ {{ $money($paymentprint->total_amount) }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <div class="section keep-together">
        <h2 class="section-title">Payment Information</h2>

        <div class="payment">
            <table class="payment-table">
                <tr>
                    <td class="label">Payment Mode</td>
                    <td>{{ $paymentMode }}</td>
                </tr>

                @if ($bankReference)
                    <tr>
                        <td class="label">Bank / Reference</td>
                        <td>{{ $bankReference }}</td>
                    </tr>
                @endif

                <tr>
                    <td class="label">Payment Date</td>
                    <td>{{ $formatDate($paymentprint->created_at) }}</td>
                </tr>

                @if (!empty($paymentprint->transactionid))
                    <tr>
                        <td class="label">Transaction ID</td>
                        <td>{{ $paymentprint->transactionid }}</td>
                    </tr>
                @endif

                @if (!empty($paymentprint->chq_card_no))
                    <tr>
                        <td class="label">Cheque Number</td>
                        <td>{{ $paymentprint->chq_card_no }}</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>

    <div class="signature keep-together">
        <table>
            <tr>
                <td class="signature-note">
                    This invoice was generated electronically.
                    For billing queries, contact help@quickdials.com.
                </td>

                <td class="signature-name">
                    <strong>For QuickDials Internet Pvt. Ltd.</strong>

                    <div class="signature-line">
                        Authorised Signatory
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="footer keep-together">
        <table>
            <tr>
                <td class="footer-left">
                    <p><strong>Registered Office</strong></p>

                    <p>
                        Unit 101, Oxford Towers, 139/88 HAL Old Airport Rd,
                        H.A.L II Stage, Bangalore North,
                        Bangalore — 560008, Karnataka, India
                    </p>

                    <p>
                        Support: help@quickdials.com |
                        Helpline: +91-75-9543-9543
                    </p>
                </td>

                <td class="footer-right">
                    <div class="thank-you">Thank You!</div>
                    Team QuickDials Internet Pvt. Ltd.
                </td>
            </tr>
        </table>
    </div>
</body>
</html>