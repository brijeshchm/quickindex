@php
    $money = fn ($value) => number_format((float) $value, 2);

    $formatDate = fn ($value) => $value
        ? \Illuminate\Support\Carbon::parse($value)->format('d M Y')
        : '—';

    $orderNumber = $paymentuprint->order_number ?: $paymentuprint->id;

    $keywords = collect($assignKeyword ?? []);

    $logoPath = public_path('client/images/small-logo.png');

    $logoSrc = !empty($imageSrc)
        ? $imageSrc
        : (is_file($logoPath) ? $logoPath : null);

    $reference = '—';

    if (!empty($paymentuprint->payment_bank)) {
        $reference = ucfirst($paymentuprint->payment_bank);
    } elseif (!empty($paymentuprint->chq_card_no)) {
        $reference = 'Cheque: '.$paymentuprint->chq_card_no;
    } elseif (!empty($paymentuprint->pay_paytm)) {
        $reference = $paymentuprint->pay_paytm;
    } elseif (!empty($paymentuprint->pay_neft)) {
        $reference = $paymentuprint->pay_neft;
    } elseif (!empty($paymentuprint->pay_googlePay)) {
        $reference = $paymentuprint->pay_googlePay;
    }
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QuickDials — Order {{ $orderNumber }}</title>

    <style>
        @page { margin: 20px 24px; }

        body {
            margin: 0;
            font-family: "DejaVu Sans", sans-serif;
            font-size: 8px;
            line-height: 1.35;
            color: #334155;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, th {
            vertical-align: top;
            word-wrap: break-word;
        }

        p { margin: 0 0 3px; }

        .accent {
            height: 4px;
            background: #2563eb;
            margin-bottom: 12px;
        }

        .header { margin-bottom: 12px; }

        .brand {
            width: 62%;
            padding-right: 15px;
        }

        .logo {
            width: 110px;
            height: auto;
            max-height: 38px;
            margin-bottom: 5px;
        }

        .company {
            margin-bottom: 5px;
            font-size: 13px;
            font-weight: bold;
            color: #0f172a;
        }

        .company-info {
            font-size: 7.5px;
            color: #64748b;
        }

        .document {
            width: 38%;
            text-align: right;
        }

        .document-label {
            font-size: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #2563eb;
        }

        .document-title {
            margin: 4px 0;
            font-size: 22px;
            font-weight: bold;
            color: #0f172a;
        }

        .order-number {
            font-size: 10px;
            font-weight: bold;
            color: #2563eb;
        }

        .greeting {
            padding: 8px 10px;
            margin-bottom: 12px;
            border-left: 3px solid #2563eb;
            background: #eff6ff;
            font-size: 8px;
        }

        .section { margin-bottom: 12px; }

        .section-title {
            margin: 0 0 6px;
            font-size: 9px;
            font-weight: bold;
            text-transform: uppercase;
            color: #2563eb;
        }

        .half { width: 50%; }
        .left { padding-right: 5px; }
        .right { padding-left: 5px; }

        .card {
            border: 1px solid #e2e8f0;
            background: #f8fafc;
        }

        .card-heading {
            padding: 6px 8px;
            background: #eef4ff;
            border-bottom: 1px solid #e2e8f0;
            color: #1d4ed8;
            font-size: 8px;
            font-weight: bold;
        }

        .info {
            table-layout: fixed;
        }

        .info th,
        .info td {
            padding: 5px 8px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
            font-size: 8px;
        }

        .info th {
            width: 39%;
            font-weight: normal;
            color: #64748b;
        }

        .info td { color: #0f172a; }

        .summary td {
            text-align: right;
            font-weight: bold;
        }

        .summary .total th,
        .summary .total td {
            background: #2563eb;
            color: #ffffff;
            font-size: 10px;
            font-weight: bold;
            padding: 7px 8px;
        }

        .words {
            padding: 7px 9px;
            margin-top: 7px;
            background: #eff6ff;
            font-size: 8px;
        }

        .listing {
            border: 1px solid #e2e8f0;
            table-layout: fixed;
        }

        .listing th {
            padding: 6px 8px;
            background: #0f172a;
            color: #ffffff;
            text-align: left;
            font-size: 8px;
        }

        .listing td {
            padding: 4px 8px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 7.5px;
        }

        .listing tbody tr:nth-child(even) {
            background: #f8fafc;
        }

        .notes {
            padding: 8px 10px;
            border: 1px solid #fde68a;
            border-left: 3px solid #f59e0b;
            background: #fffbeb;
            color: #78350f;
        }

        .notes-title {
            margin-bottom: 5px;
            font-size: 8px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .notes ul {
            margin: 0;
            padding-left: 13px;
        }

        .notes li {
            margin-bottom: 3px;
            font-size: 7px;
            line-height: 1.3;
        }

        .registration {
            padding: 7px 9px;
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            font-size: 7px;
        }

        .registration td {
            width: 50%;
            padding: 2px 0;
        }

        .footer {
            margin-top: 10px;
            padding-top: 8px;
            border-top: 2px solid #0f172a;
        }

        .footer-left {
            width: 65%;
            padding-right: 12px;
            font-size: 7px;
            color: #64748b;
        }

        .footer-right {
            width: 35%;
            text-align: right;
            font-size: 7px;
            color: #64748b;
        }

        .thank-you {
            font-size: 14px;
            font-weight: bold;
            color: #2563eb;
        }

        a {
            color: #2563eb;
            text-decoration: none;
        }

        .keep-together { page-break-inside: avoid; }
        thead { display: table-header-group; }
        tr { page-break-inside: avoid; }
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

                <div class="company">QuickDials Internet Pvt. Ltd.</div>

                <div class="company-info">
                    Unit 101, Oxford Towers, 139/88 HAL Old Airport Rd,<br>
                    H.A.L II Stage, Bangalore North, Bangalore — 560008<br>
                    Phone: +91-75-5943-5943<br>
                    info@quickdials.com | www.quickdials.com
                </div>
            </td>

            <td class="document">
                <div class="document-label">QuickDials / Orders</div>
                <h1 class="document-title">Order Receipt</h1>
                <p class="order-number">#{{ $orderNumber }}</p>
                <p>{{ $formatDate($paymentuprint->order_date) }}</p>
            </td>
        </tr>
    </table>

    <div class="greeting">
        Dear <strong>{{ $paymentuprint->business_name }}</strong>,
        thank you for choosing QuickDials!
    </div>

    <div class="section keep-together">
        <h2 class="section-title">Order & Customer Information</h2>

        <table>
            <tr>
                <td class="half left">
                    <div class="card">
                        <div class="card-heading">Order Details</div>

                        <table class="info">
                            <tr>
                                <th>Order Number</th>
                                <td>#{{ $orderNumber }}</td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td>{{ $formatDate($paymentuprint->order_date) }}</td>
                            </tr>
                            <tr>
                                <th>Package</th>
                                <td>{{ $paymentuprint->package_name }}</td>
                            </tr>
                            <tr>
                                <th>Leads</th>
                                <td>{{ $paymentuprint->leads_count }}</td>
                            </tr>

                            @if (!empty($paymentuprint->expired_from))
                                <tr>
                                    <th>Duration</th>
                                    <td>
                                        {{ $formatDate($paymentuprint->expired_from) }}
                                        to
                                        {{ $formatDate($paymentuprint->expired_on) }}
                                    </td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </td>

                <td class="half right">
                    <div class="card">
                        <div class="card-heading">Customer Details</div>

                        <table class="info">
                            <tr>
                                <th>Customer</th>
                                <td>
                                    {{ ucfirst((string) $paymentuprint->customer_name) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Business</th>
                                <td>
                                    {{ ucfirst((string) $paymentuprint->business_name) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $paymentuprint->mobile }}</td>
                            </tr>

                            @if (!empty($paymentuprint->comment_author_email))
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $paymentuprint->comment_author_email }}</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="section keep-together">
        <h2 class="section-title">Payment Details</h2>

        <table>
            <tr>
                <td class="half left">
                    <div class="card">
                        <div class="card-heading">Amount Summary</div>

                        <table class="info summary">
                            <tr>
                                <th>Amount Paid</th>
                                <td>₹ {{ $money($paymentuprint->paid_amount) }}</td>
                            </tr>
                            <tr>
                                <th>GST</th>
                                <td>₹ {{ $money($paymentuprint->gst_tax) }}</td>
                            </tr>
                            <tr>
                                <th>TDS</th>
                                <td>₹ {{ $money($paymentuprint->tds_amount) }}</td>
                            </tr>
                            <tr class="total">
                                <th>Total Amount</th>
                                <td>₹ {{ $money($paymentuprint->total_amount) }}</td>
                            </tr>
                        </table>
                    </div>
                </td>

                <td class="half right">
                    <div class="card">
                        <div class="card-heading">Transaction Information</div>

                        <table class="info">
                            <tr>
                                <th>Payment Mode</th>
                                <td>
                                    {{ ucfirst((string) ($paymentuprint->payment_mode ?: 'NA')) }}
                                </td>
                            </tr>
                            <tr>
                                <th>Bank / Reference</th>
                                <td>{{ $reference }}</td>
                            </tr>

                            @if (!empty($paymentuprint->transactionid))
                                <tr>
                                    <th>Transaction ID</th>
                                    <td>{{ $paymentuprint->transactionid }}</td>
                                </tr>
                            @endif

                            @if (!empty($paymentuprint->proofid))
                                <tr>
                                    <th>ID Proof</th>
                                    <td>
                                        {{ $paymentuprint->selectproofid }}
                                        ({{ $paymentuprint->proofid }})
                                    </td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </td>
            </tr>
        </table>

        
    </div>

    @if ($keywords->isNotEmpty())
        <div class="section">
            <h2 class="section-title">Listing Details</h2>

            <table class="listing">
                <thead>
                    <tr>
                        <th style="width: 7%;">#</th>
                        <th style="width: 38%;">Category</th>
                        <th style="width: 55%;">Keyword</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($keywords as $keyword)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $keyword->parent_category }}</td>
                            <td>{{ $keyword->keyword }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <div class="section notes keep-together">
        <div class="notes-title">Important Notes</div>

        <ul>
            <li>
                You can check your balance value and pending lead details
                after logging into quickdials.com.
            </li>
            <li>
                No verbal or written commitment outside this order form
                will be considered.
            </li>
            <li>
                This contract represents the entire agreement between the
                parties and supersedes any other terms.
            </li>
            <li>
                Your advertisement will be activated within
                <strong>3 days</strong> of payment clearance.
            </li>
            <li>
                Applicable TDS rate is <strong>2%</strong> under Section 194C
                on net amount excluding tax.
            </li>
            <li>
                For queries: help@quickdials.com.
                Timings: Monday to Sunday — 24/7.
            </li>
        </ul>
    </div>

    <div class="registration keep-together">
        <table>
            <tr>
                <td><strong>GSTIN:</strong> 09AAECL0574H1ZG</td>
                <td><strong>TAN:</strong> BLRQ01951F</td>
            </tr>
            <tr>
                <td><strong>PAN:</strong> AABCQ2259D</td>
                <td><strong>CIN:</strong> U63112KA2026PTC215594</td>
            </tr>
        </table>
    </div>

    <div class="footer keep-together">
        <table>
            <tr>
                <td class="footer-left">
                    <p>
                        <a href="https://www.quickdials.com/privacy-policy">
                            Terms & Conditions
                        </a>
                    </p>

                    <p>
                        Looking forward to a long and fruitful association with you!
                    </p>

                    <p>
                        Registered Office: Unit 101, Oxford Towers,
                        139/88 HAL Old Airport Rd, H.A.L II Stage,
                        Bangalore North, Bangalore — 560008, Karnataka.
                    </p>
                </td>

                <td class="footer-right">
                    <div class="thank-you">Thank You!</div>
                    <p>Team QuickDials Internet Pvt. Ltd.</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>