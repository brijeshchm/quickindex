@php
    $money = fn ($value) => number_format((float) $value, 2);

    // For the tax invoice view, change this default to 'Tax Invoice'.
    $documentTitle = $documentTitle ?? 'Proforma Invoice';

    $invoiceNumber = $paymentprint->order_number ?: $paymentprint->id;

    $invoiceDate = $paymentprint->order_date
        ? \Illuminate\Support\Carbon::parse($paymentprint->order_date)->format('d M Y')
        : '—';

    $paymentDate = $paymentprint->created_at
        ? \Illuminate\Support\Carbon::parse($paymentprint->created_at)->format('d M Y')
        : '—';

    $package = ucfirst((string) $paymentprint->package_name);

    $logoPath = public_path('client/images/small-logo.png');

    $logoSrc = !empty($imageSrc)
        ? $imageSrc
        : (is_file($logoPath) ? $logoPath : null);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $documentTitle }} — {{ $invoiceNumber }}</title>

    <style>
        @page { margin: 3px; }

        body {
            margin: 0;
            font-family: "DejaVu Sans", sans-serif;
            font-size: 10px;
            line-height: 1.55;
            color: #334155;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, th { vertical-align: top; }
        p { margin: 0 0 5px; }

        .top-line {
            height: 5px;
            background: #2563eb;
            margin-bottom: 22px;
        }

        .header { margin-bottom: 7px; }

        .brand-cell {
            width: 57%;
            padding-right: 20px;
        }

        .document-cell {
            width: 43%;
            text-align: right;
        }

        .logo {
            width: 140px;
            margin-bottom: 10px;
        }

        .company {
            margin-bottom: 6px;
            font-size: 15px;
            font-weight: bold;
            color: #0f172a;
        }

        .small {
            font-size: 8px;
            color: #64748b;
        }

        .eyebrow {
            margin-bottom: 4px;
            font-size: 8px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #2563eb;
        }

        .document-title {
            margin: 0 0 12px;
            font-size: 25px;
            line-height: 1.2;
            font-weight: bold;
            color: #0f172a;
        }

        .meta td {
            padding: 4px 0;
            font-size: 9px;
        }

        .meta-label {
            width: 45%;
            text-align: left;
            color: #64748b;
        }

        .meta-value {
            text-align: right;
            font-weight: bold;
            color: #0f172a;
        }

        .registration {
            margin-bottom: 22px;
            padding: 10px 12px;
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            font-size: 8px;
            color: #475569;
        }

        .registration td { width: 50%; padding: 2px 0; }
        .registration strong { color: #0f172a; }

        .section-title {
            margin: 0 0 9px;
            font-size: 9px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #2563eb;
        }

        .section { margin-bottom: 22px; }

        .half { width: 50%; }
        .left { padding-right: 8px; }
        .right { padding-left: 8px; }

        .party {
            border: 1px solid #e2e8f0;
            padding: 12px;
            background: #f8fafc;
        }

        .party-label {
            margin-bottom: 7px;
            font-size: 8px;
            font-weight: bold;
            text-transform: uppercase;
            color: #2563eb;
        }

        .business-name {
            margin-bottom: 8px;
            font-size: 12px;
            font-weight: bold;
            color: #0f172a;
        }

        .details {
            font-size: 9px;
            word-wrap: break-word;
        }

        .details td { padding: 3px 0; }
        .details .label { width: 50px; color: #64748b; }

        .items {
            border: 1px solid #e2e8f0;
            table-layout: fixed;
        }

        .items th {
            padding: 11px 9px;
            background: #0f172a;
            color: #ffffff;
            font-size: 8px;
            text-align: left;
            text-transform: uppercase;
        }

        .items td {
            padding: 14px 9px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 9px;
            word-wrap: break-word;
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

        .summary-layout { margin-top: 16px; }
        .summary-note { width: 53%; padding-right: 20px; }
        .summary-cell { width: 47%; }

        .note-box {
            padding: 12px;
            background: #eff6ff;
            border-left: 3px solid #2563eb;
            font-size: 9px;
            color: #334155;
        }

        .note-label {
            margin-bottom: 6px;
            font-size: 8px;
            font-weight: bold;
            text-transform: uppercase;
            color: #2563eb;
        }

        .totals td {
            padding: 8px 10px;
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
            padding: 12px 10px;
            background: #2563eb;
            color: #ffffff;
            font-size: 12px;
            font-weight: bold;
            border: none;
        }

        .payment-box {
            border: 1px solid #e2e8f0;
            padding: 12px;
        }

        .payment-details td {
            padding: 5px 0;
            font-size: 9px;
            word-wrap: break-word;
        }

        .payment-details .label { width: 38%; color: #64748b; }

        .signature {
            margin-top: 20px;
            padding-top: 14px;
            border-top: 1px solid #e2e8f0;
        }

        .signature-note {
            width: 62%;
            padding-right: 20px;
            font-size: 8px;
            color: #64748b;
        }

        .signature-name {
            width: 38%;
            text-align: right;
            font-size: 9px;
            color: #0f172a;
        }

        .signature-rule {
            margin-top: 22px;
            padding-top: 7px;
            border-top: 1px solid #94a3b8;
        }

        .footer {
            margin-top: 24px;
            padding: 12px 0 0;
            border-top: 2px solid #0f172a;
            font-size: 8px;
            color: #64748b;
        }

        .footer-title {
            margin-bottom: 5px;
            font-size: 11px;
            font-weight: bold;
            color: #2563eb;
        }

        .keep-together { page-break-inside: avoid; }
        thead { display: table-header-group; }
        tr { page-break-inside: avoid; }

        /* Compact A4 PDF layout */
@page {
    margin: 20px 24px;
}

body {
    margin: 0;
    font-size: 9px;
    line-height: 1.35;
}

p {
    margin: 0 0 3px;
}

.top-line {
    height: 4px;
    margin-bottom: 12px;
}

.header {
    margin-bottom: 12px;
}

.brand-cell {
    padding-right: 12px;
}

.logo {
    width: 115px;
    height: auto;
    max-height: 45px;
    margin-bottom: 6px;
}

.company {
    font-size: 13px;
    margin-bottom: 4px;
}

.small {
    font-size: 8px;
    line-height: 1.35;
}

.eyebrow {
    font-size: 7px;
    letter-spacing: 1px;
    margin-bottom: 4px;
}

.document-title {
    font-size: 21px;
    line-height: 1.15;
    margin-bottom: 8px;
}

.meta td {
    padding: 3px 0;
    font-size: 8px;
}

.registration {
    padding: 7px 10px;
    margin-bottom: 12px;
    font-size: 8px;
}

.registration td {
    padding: 1px 0;
}

.section {
    margin-bottom: 12px;
}

.section-title {
    margin: 0 0 6px;
    font-size: 9px;
}

.left {
    padding-right: 5px;
}

.right {
    padding-left: 5px;
}

.party {
    padding: 9px;
}

.party-label {
    margin-bottom: 5px;
    font-size: 8px;
}

.business-name {
    margin-bottom: 5px;
    font-size: 10px;
}

.details td {
    padding: 2px 0;
    font-size: 8px;
    word-wrap: break-word;
}

.items th {
    padding: 7px 8px;
    font-size: 8px;
}

.items td {
    padding: 9px 8px;
    font-size: 9px;
}

.package-name {
    font-size: 10px;
    margin-bottom: 3px;
}

.summary-layout {
    margin-top: 10px;
}

.summary-note {
    padding-right: 12px;
}

.note-box {
    padding: 9px;
    font-size: 8px;
}

.note-label {
    margin-bottom: 4px;
    font-size: 8px;
}

.totals td {
    padding: 6px 8px;
    font-size: 9px;
}

.totals .grand-total td {
    padding: 9px 8px;
    font-size: 11px;
}

.payment-box {
    padding: 8px 10px;
}

.payment-details td {
    padding: 3px 0;
    font-size: 8px;
}

.signature {
    margin-top: 12px;
    padding-top: 10px;
}

.signature-note {
    font-size: 8px;
    padding-right: 12px;
}

.signature-name {
    font-size: 8px;
}

.signature-rule {
    margin-top: 12px;
    padding-top: 5px;
}

.footer {
    margin-top: 14px;
    padding-top: 8px;
    font-size: 8px;
}

.footer-title {
    margin-bottom: 4px;
    font-size: 10px;
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
    <div class="top-line"></div>

    <table class="header">
        <tr>
            <td class="brand-cell">
                @if ($logoSrc)
                    <img src="{{ $logoSrc }}" alt="QuickDials" class="logo">
                @endif

                <div class="company">QuickDials Internet Pvt. Ltd.</div>

                <p class="small">
                    Unit 101, Oxford Towers, 139/88 HAL Old Airport Rd,<br>
                    H.A.L II Stage, Bangalore North,<br>
                    Bangalore — 560008, Karnataka, India
                </p>

                <p class="small">
                    info@quickdials.com | www.quickdials.com
                </p>
            </td>

            <td class="document-cell">
                <div class="eyebrow">QuickDials / Billing</div>

                <h1 class="document-title">{{ $documentTitle }}</h1>

                <table class="meta">
                    <tr>
                        <td class="meta-label">Document No.</td>
                        <td class="meta-value">{{ $invoiceNumber }}</td>
                    </tr>

                    <tr>
                        <td class="meta-label">Invoice Date</td>
                        <td class="meta-value">{{ $invoiceDate }}</td>
                    </tr>

                    <tr>
                        <td class="meta-label">Currency</td>
                        <td class="meta-value">INR</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <div class="registration">
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
        <table>
            <tr>
                <td class="half left">
                    <div class="party">
                        <div class="party-label">Billed To</div>

                        <div class="business-name">
                            {{ ucwords((string) $client->business_name) }}
                        </div>

                        <table class="details">
                            <tr>
                                <td class="label">Address</td>
                                <td>
                                    {{ $client->address }}
                                    @if (!empty($client->city))
                                        , {{ $client->city }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="label">Phone</td>
                                <td>{{ $client->mobile }}</td>
                            </tr>
                            <tr>
                                <td class="label">Email</td>
                                <td>{{ $client->email }}</td>
                            </tr>
                        </table>
                    </div>
                </td>

                <td class="half right">
                    <div class="party">
                        <div class="party-label">Shipped To</div>

                        <div class="business-name">
                            {{ ucwords((string) $client->business_name) }}
                        </div>

                        <table class="details">
                            <tr>
                                <td class="label">Address</td>
                                <td>{{ $client->address }}</td>
                            </tr>
                            <tr>
                                <td class="label">Phone</td>
                                <td>{{ $client->mobile }}</td>
                            </tr>
                            <tr>
                                <td class="label">Email</td>
                                <td>{{ $client->email }}</td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="section">
        <h2 class="section-title">Services & Package</h2>

        <table class="items">
            <thead>
                <tr>
                    <th style="width: 8%;">No.</th>
                    <th style="width: 44%;">Description</th>
                    <th class="number" style="width: 24%;">Package Rate</th>
                    <th class="number" style="width: 24%;">Amount</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>01</td>

                    <td>
                        <div class="package-name">{{ $package }}</div>

                        <div class="small">
                            {{ $paymentprint->leads_count }} Leads
                        </div>
                    </td>

                    <td class="number">
                        ₹ {{ $money($paymentprint->paid_amount) }}
                    </td>

                    <td class="number">
                        <strong>₹ {{ $money($paymentprint->paid_amount) }}</strong>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="summary-layout keep-together">
            <tr>
                <td class="summary-note">
                    <div class="note-box">
                        <div class="note-label">Amount in Words</div>
                        {{ $paymentprint->paid_amt_in_words ?: '—' }}
                    </div>
                </td>

                <td class="summary-cell">
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

        <div class="payment-box">
            <table class="payment-details">
                <tr>
                    <td class="label">Payment Mode</td>
                    <td>{{ $paymentprint->payment_mode ?: 'NA' }}</td>
                </tr>

                <tr>
                    <td class="label">Payment Date</td>
                    <td>{{ $paymentDate }}</td>
                </tr>

                @if (!empty($paymentprint->transactionid))
                    <tr>
                        <td class="label">Transaction Reference</td>
                        <td>{{ $paymentprint->transactionid }}</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>

    <div class="signature keep-together">
        <table>
            <tr>
                <td class="signature-note">
                    This {{ strtolower($documentTitle) }} is system generated.
                    No physical signature is required.
                </td>

                <td class="signature-name">
                    <strong>For QuickDials Internet Pvt. Ltd.</strong>

                    <div class="signature-rule">
                        Authorised Signatory
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="footer keep-together">
        <div class="footer-title">Thank you for choosing QuickDials.</div>

        <p>
            Registered Office: Unit 101, Oxford Towers, 139/88 HAL Old Airport Rd,
            H.A.L II Stage, Bangalore North, Bangalore — 560008, Karnataka
        </p>

        <p>
            Support: help@quickdials.com | www.quickdials.com
        </p>
    </div>
</body>
</html>