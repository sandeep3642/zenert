<!-- business information here -->
<div class="row">

    <!-- Logo -->
    {{-- @if (!empty($receipt_details->logo))
        <img style="max-height: 120px; width: auto;" src="{{ $receipt_details->logo }}"
            class="img img-responsive center-block">
    @endif --}}

    <!-- Header text -->
    {{-- @if (!empty($receipt_details->header_text))
        <div class="col-xs-12">
            {!! $receipt_details->header_text !!}
        </div>
    @endif --}}
    <div class="col-md-12" style="width:100%;height:120px;">

    </div>
    <!-- business information here -->
    <div class="col-xs-12 text-center">
        {{-- <h2 class="text-center">
            <!-- Shop & Location Name  -->
            @if (!empty($receipt_details->display_name))
                {{ $receipt_details->display_name }}
            @endif
        </h2> --}}

        <!-- Address -->
        {{-- <p>
            @if (!empty($receipt_details->address))
                <small class="text-center">
                    {!! $receipt_details->address !!}
                </small>
            @endif
            @if (!empty($receipt_details->contact))
                <br />{!! $receipt_details->contact !!}
            @endif
            @if (!empty($receipt_details->contact) && !empty($receipt_details->website))
                ,
            @endif
            @if (!empty($receipt_details->website))
                {{ $receipt_details->website }}
            @endif
            @if (!empty($receipt_details->location_custom_fields))
                <br>{{ $receipt_details->location_custom_fields }}
            @endif
        </p> --}}
        {{-- <p>
            @if (!empty($receipt_details->sub_heading_line1))
                {{ $receipt_details->sub_heading_line1 }}
            @endif
            @if (!empty($receipt_details->sub_heading_line2))
                <br>{{ $receipt_details->sub_heading_line2 }}
            @endif
            @if (!empty($receipt_details->sub_heading_line3))
                <br>{{ $receipt_details->sub_heading_line3 }}
            @endif
            @if (!empty($receipt_details->sub_heading_line4))
                <br>{{ $receipt_details->sub_heading_line4 }}
            @endif
            @if (!empty($receipt_details->sub_heading_line5))
                <br>{{ $receipt_details->sub_heading_line5 }}
            @endif
        </p> --}}
        {{-- <p>
            @if (!empty($receipt_details->tax_info1))
                <b>{{ $receipt_details->tax_label1 }}</b> {{ $receipt_details->tax_info1 }}
            @endif

            @if (!empty($receipt_details->tax_info2))
                <b>{{ $receipt_details->tax_label2 }}</b> {{ $receipt_details->tax_info2 }}
            @endif
        </p> --}}

        <!-- Title of receipt -->
        {{-- @if (!empty($receipt_details->invoice_heading))
            <h3 class="text-center">
                {!! $receipt_details->invoice_heading !!}
            </h3>
        @endif --}}

        <!-- Invoice  number, Date  -->
        {{-- <p style="width: 100% !important" class="word-wrap">
            <span class="pull-left text-left word-wrap">
                @if (!empty($receipt_details->invoice_no_prefix))
                    <b>{!! $receipt_details->invoice_no_prefix !!}</b>
                @endif
                {{ $receipt_details->invoice_no }}

                @if (!empty($receipt_details->types_of_service))
                    <br />
                    <span class="pull-left text-left">
                        <strong>{!! $receipt_details->types_of_service_label !!}:</strong>
                        {{ $receipt_details->types_of_service }}
                        <!-- Waiter info -->
                        @if (!empty($receipt_details->types_of_service_custom_fields))
                            @foreach ($receipt_details->types_of_service_custom_fields as $key => $value)
                                <br><strong>{{ $key }}: </strong> {{ $value }}
                            @endforeach
                        @endif
                    </span>
                @endif

                <!-- Table information-->
                @if (!empty($receipt_details->table_label) || !empty($receipt_details->table))
                    <br />
                    <span class="pull-left text-left">
                        @if (!empty($receipt_details->table_label))
                            <b>{!! $receipt_details->table_label !!}</b>
                        @endif
                        {{ $receipt_details->table }}

                        <!-- Waiter info -->
                    </span>
                @endif

                <!-- customer info -->
                @if (!empty($receipt_details->customer_info))
                    <br />
                    <b>{{ $receipt_details->customer_label }}</b> <br> {!! $receipt_details->customer_info !!} <br>
                @endif
                @if (!empty($receipt_details->client_id_label))
                    <br />
                    <b>{{ $receipt_details->client_id_label }}</b> {{ $receipt_details->client_id }}
                @endif
                @if (!empty($receipt_details->customer_tax_label))
                    <br />
                    <b>{{ $receipt_details->customer_tax_label }}</b> {{ $receipt_details->customer_tax_number }}
                @endif
                @if (!empty($receipt_details->customer_custom_fields))
                    <br />{!! $receipt_details->customer_custom_fields !!}
                @endif
                @if (!empty($receipt_details->sales_person_label))
                    <br />
                    <b>{{ $receipt_details->sales_person_label }}</b> {{ $receipt_details->sales_person }}
                @endif
                @if (!empty($receipt_details->commission_agent_label))
                    <br />
                    <strong>{{ $receipt_details->commission_agent_label }}</strong>
                    {{ $receipt_details->commission_agent }}
                @endif
                @if (!empty($receipt_details->customer_rp_label))
                    <br />
                    <strong>{{ $receipt_details->customer_rp_label }}</strong>
                    {{ $receipt_details->customer_total_rp }}
                @endif
            </span>

            <span class="pull-right text-left">
                <b>{{ $receipt_details->date_label }}</b> {{ $receipt_details->invoice_date }}

                @if (!empty($receipt_details->due_date_label))
                    <br><b>{{ $receipt_details->due_date_label }}</b> {{ $receipt_details->due_date ?? '' }}
                @endif

                @if (!empty($receipt_details->brand_label) || !empty($receipt_details->repair_brand))
                    <br>
                    @if (!empty($receipt_details->brand_label))
                        <b>{!! $receipt_details->brand_label !!}</b>
                    @endif
                    {{ $receipt_details->repair_brand }}
                @endif


                @if (!empty($receipt_details->device_label) || !empty($receipt_details->repair_device))
                    <br>
                    @if (!empty($receipt_details->device_label))
                        <b>{!! $receipt_details->device_label !!}</b>
                    @endif
                    {{ $receipt_details->repair_device }}
                @endif

                @if (!empty($receipt_details->model_no_label) || !empty($receipt_details->repair_model_no))
                    <br>
                    @if (!empty($receipt_details->model_no_label))
                        <b>{!! $receipt_details->model_no_label !!}</b>
                    @endif
                    {{ $receipt_details->repair_model_no }}
                @endif

                @if (!empty($receipt_details->serial_no_label) || !empty($receipt_details->repair_serial_no))
                    <br>
                    @if (!empty($receipt_details->serial_no_label))
                        <b>{!! $receipt_details->serial_no_label !!}</b>
                    @endif
                    {{ $receipt_details->repair_serial_no }}<br>
                @endif
                @if (!empty($receipt_details->repair_status_label) || !empty($receipt_details->repair_status))
                    @if (!empty($receipt_details->repair_status_label))
                        <b>{!! $receipt_details->repair_status_label !!}</b>
                    @endif
                    {{ $receipt_details->repair_status }}<br>
                @endif

                @if (!empty($receipt_details->repair_warranty_label) || !empty($receipt_details->repair_warranty))
                    @if (!empty($receipt_details->repair_warranty_label))
                        <b>{!! $receipt_details->repair_warranty_label !!}</b>
                    @endif
                    {{ $receipt_details->repair_warranty }}
                    <br>
                @endif

                <!-- Waiter info -->
                @if (!empty($receipt_details->service_staff_label) || !empty($receipt_details->service_staff))
                    <br />
                    @if (!empty($receipt_details->service_staff_label))
                        <b>{!! $receipt_details->service_staff_label !!}</b>
                    @endif
                    {{ $receipt_details->service_staff }}
                @endif
                @if (!empty($receipt_details->shipping_custom_field_1_label))
                    <br><strong>{!! $receipt_details->shipping_custom_field_1_label !!} :</strong> {!! $receipt_details->shipping_custom_field_1_value ?? '' !!}
                @endif

                @if (!empty($receipt_details->shipping_custom_field_2_label))
                    <br><strong>{!! $receipt_details->shipping_custom_field_2_label !!}:</strong> {!! $receipt_details->shipping_custom_field_2_value ?? '' !!}
                @endif

                @if (!empty($receipt_details->shipping_custom_field_3_label))
                    <br><strong>{!! $receipt_details->shipping_custom_field_3_label !!}:</strong> {!! $receipt_details->shipping_custom_field_3_value ?? '' !!}
                @endif

                @if (!empty($receipt_details->shipping_custom_field_4_label))
                    <br><strong>{!! $receipt_details->shipping_custom_field_4_label !!}:</strong> {!! $receipt_details->shipping_custom_field_4_value ?? '' !!}
                @endif

                @if (!empty($receipt_details->shipping_custom_field_5_label))
                    <br><strong>{!! $receipt_details->shipping_custom_field_2_label !!}:</strong> {!! $receipt_details->shipping_custom_field_5_value ?? '' !!}
                @endif
                <!-- sale order -->
                @if (!empty($receipt_details->sale_orders_invoice_no))
                    <br>
                    <strong>@lang('restaurant.order_no'):</strong> {!! $receipt_details->sale_orders_invoice_no ?? '' !!}
                @endif

                @if (!empty($receipt_details->sale_orders_invoice_date))
                    <br>
                    <strong>@lang('lang_v1.order_dates'):</strong> {!! $receipt_details->sale_orders_invoice_date ?? '' !!}
                @endif
            </span>
        </p> --}}
    </div>
</div>

<div class="row">
    @includeIf('sale_pos.receipts.partial.common_repair_invoice')
</div>

<div class="row">
    <div class="col-xs-12">
        @php
            $p_width = 40;
        @endphp
        @if (!empty($receipt_details->item_discount_label))
            @php
                $p_width -= 15;
            @endphp
        @endif
        <table class="table table-responsive table-bordered table-condensed">
            <tr>
                <td colspan="6" class="text-center">
                    <b class="invoice-center">TAX INVOICE</b>
                    <span class="invoice-head">[ ] Original [ ] Duplicateee [ ] Transporter</span>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    @if (!empty($receipt_details->customer_info))
                        <p>To , <b>{{ $receipt_details->customer_name }}</b></p>
                    @endif
                    <p>Address: <b>{{ $receipt_details->customer_address }}</b></p>
                    <p>State: <b>{{ $receipt_details->state }}</b> &nbsp; State Code: <b>05</b>
                        &nbsp; Tel/M: <b>{{ $receipt_details->customer_mobile }}</b></p>
                    <p>Customer pan no: <b>{{ $receipt_details->sell_custom_field_3_value }}</b></p>
                </td>
                <td colspan="3">
                    <ul class="list-unstyled">
                        <li class="price-detail">
                            <div class="detail-title">Invoice No.</div>
                            <div class="detail-amt">
                                <b>{{ $receipt_details->invoice_no }}</b>
                            </div>
                        </li>
                        <li class="price-detail">
                            <div class="detail-title">Date</div>
                            <div class="detail-amt"><b>{{ $receipt_details->invoice_date }}</b></div>
                        </li>
                        <li class="price-detail">
                            <div class="detail-title">22 crt rate</div>
                            <div class="detail-amt"><b>{{ $receipt_details->sell_custom_field_1_value }}</b></div>
                        </li>
                        <li class="price-detail">
                            <div class="detail-title">24 crt rate</div>
                            <div class="detail-amt"><b>{{ $receipt_details->sell_custom_field_2_value }}</b></div>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                {{-- <td></td> --}}
                <td colspan="3">SR &nbsp;&nbsp;&nbsp; Description of Goods</td>
                <td>HSN/SAC</td>
                <td>Quantity</td>
                {{-- <td>Place</td> --}}
                <td>Sub Total</td>

            </tr>
            <tbody>

                <tr>
                    <th colspan="6">
                        <ul class="list-unstyled" style="height:250px;">
                            @forelse($receipt_details->lines as $line)
                                <li class="price-detail">
                                    <div class="detail-title" style="width:58%;">{{ $loop->index + 1 }}
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        {{ $line['name'] }} {{ $line['product_variation'] }}
                                        {{ $line['variation'] }}
                                        @if (!empty($line['sell_line_note']))
                                        <small>
                                        {{ $line['sell_line_note'] }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="detail-amt" style="width:11%;">
                                        @if (!empty($line['cat_code']))
                                            &nbsp;{{ $line['cat_code'] }}
                                        @endif
                                        @if($line['cat_code']=='7616')
                                        @php $hallmark=$line['cat_code'];
                                        $hallmark_price=$line['line_total'];
                                        @endphp
                                        @else
                                        @php $hallmark="";
                                        $hallmark_price="";
                                        @endphp
                                        @endif
                                    </div>
                                    <div class="detail-amt" style="width:16%;">
                                        &nbsp;{{ $line['quantity'] }} {{ $line['units'] }}
                                    </div>
                                    <div class="detail-amt" style="width:10%;">
                                        {{ $line['line_total'] }}
                                    </div>
                                </li>
                                @if (!empty($line['modifiers']))
                                    @foreach ($line['modifiers'] as $modifier)
                                        <li class="price-detail">
                                            <div class="detail-title" style="width:55%;">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                {{ $modifier['name'] }} {{ $modifier['variation'] }}
                                            </div>
                                            <div class="detail-amt" style="width:13%;">
                                                @if (!empty($modifier['cat_code']))
                                                    , {{ $modifier['cat_code'] }}
                                                @endif
                                                @if (!empty($modifier['sub_sku']))
                                                {{ $modifier['sub_sku'] }} 
                                                @endif
                                                @if($modifier['cat_code']=='7616')
                                                @php $hallmark=$modifier['cat_code'];
                                                $hallmark_price=$modifier['line_total'];
                                                @endphp
                                                @endif
                                            </div>
                                            <div class="detail-amt" style="width:17%;">
                                                {{ $modifier['quantity'] }} {{ $modifier['units'] }}
                                            </div>
                                            <div class="detail-amt" style="width:10%;">
                                                {{ $modifier['line_total'] }}
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            @empty

                            @endforelse
                        </ul>
                    </th>
                </tr>
                {{-- <tr> --}}
                {{-- <th></th> --}}
                {{-- <th colspan="3"> --}}
                {{-- {{ $loop->index + 1 }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
                {{-- @if (!empty($line['image'])) --}}
                {{-- <img src="{{ $line['image'] }}" alt="Image" width="50" --}}
                {{-- style="float: left; margin-right: 8px;"> --}}
                {{-- @endif --}}
                {{-- {{ $line['name'] }} {{ $line['product_variation'] }} {{ $line['variation'] }} --}}
                {{-- @if (!empty($line['sub_sku'])) --}}
                {{-- , {{ $line['sub_sku'] }} --}}
                {{-- @endif --}}
                {{-- @if (!empty($line['brand'])) --}}
                {{-- , {{ $line['brand'] }} --}}
                {{-- @endif --}}

                {{-- @if (!empty($line['product_custom_fields'])) --}}
                {{-- , {{ $line['product_custom_fields'] }} --}}
                {{-- @endif --}}
                {{-- @if (!empty($line['sell_line_note'])) --}}
                {{-- <br> --}}
                {{-- <small> --}}
                {{-- {{ $line['sell_line_note'] }} --}}
                {{-- </small> --}}
                {{-- @endif --}}
                {{-- @if (!empty($line['lot_number'])) --}}
                {{-- <br> {{ $line['lot_number_label'] }}: {{ $line['lot_number'] }} --}}
                {{-- @endif --}}
                {{-- @if (!empty($line['product_expiry'])) --}}
                {{-- , {{ $line['product_expiry_label'] }}: {{ $line['product_expiry'] }} --}}
                {{-- @endif --}}

                {{-- @if (!empty($line['warranty_name'])) --}}
                {{-- <br><small>{{ $line['warranty_name'] }} </small> --}}
                {{-- @endif --}}
                {{-- @if (!empty($line['warranty_exp_date'])) --}}
                {{-- <small>- {{ @format_date($line['warranty_exp_date']) }} </small> --}}
                {{-- @endif --}}
                {{-- @if (!empty($line['warranty_description'])) --}}
                {{-- <small> {{ $line['warranty_description'] ?? '' }}</small> --}}
                {{-- @endif --}}
                {{-- </th> --}}
                {{-- <th> --}}
                {{-- @if (!empty($line['cat_code']))
                                {{ $line['cat_code'] }}
                            @endif
                        </th>
                        <th class="text-left">{{ $line['quantity'] }} {{ $line['units'] }} </th> --}}
                {{-- <th></th> --}}
                {{-- <td class="text-right">{{ $line['unit_price_before_discount'] }}</td> --}}
                {{-- @if (!empty($receipt_details->item_discount_label))
                            <td class="text-right">
                                {{ $line['total_line_discount'] ?? '0.00' }}
                            </td>
                        @endif --}}
                {{-- <th class="text-right">{{ $line['line_total'] }}</th>
                    </tr> --}}

                {{-- <tr>
                                <th colspan="6">
                                    <ul class="list-unstyled"> --}}

                {{-- </ul>
                                </th>
                            </tr> --}}
                {{-- <tr>
                                <th colspa="2">
                                    {{ $modifier['name'] }} {{ $modifier['variation'] }} --}}
                {{-- @if (!empty($modifier['sub_sku'])) --}}
                {{-- , {{ $modifier['sub_sku'] }} --}}
                {{-- @endif --}}

                {{-- @if (!empty($modifier['sell_line_note'])) --}}
                {{-- ({{ $modifier['sell_line_note'] }}) --}}
                {{-- @endif --}}
                {{-- </th>
                                <th>
                                    @if (!empty($modifier['cat_code']))
                                        , {{ $modifier['cat_code'] }}
                                    @endif
                                </th>
                                <th class="text-right">{{ $modifier['quantity'] }} {{ $modifier['units'] }}
                                </th> --}}
                {{-- <th></th> --}}
                {{-- <td class="text-right">{{ $modifier['unit_price_inc_tax'] }}</td>
                                @if (!empty($receipt_details->item_discount_label))
                                    <td class="text-right">0.00</td>
                                @endif --}}
                {{-- <th class="text-right">{{ $modifier['line_total'] }}</th> --}}
                {{-- </tr> --}}



            </tbody>
            <tr>
                <td colspan="5" class="text-right"><b>Total</b></td>
                <td class="text-left"><b> {{ $receipt_details->subtotal }}</b></td>
            </tr>
            <tr>
                <td colspan="4" rowspan="8"><b>Company Name & Bank Details</b>
                    <ul class="list-unstyled">
                        <li class="price-detail">
                            <div class="detail-title">Company Name: </div>
                            <div class="detail-amt" style="margin-right:80px;">
                                {{ $receipt_details->bank_details->pan_number }}
                            </div>
                        </li>
                        <li class="price-detail">
                            <div class="detail-title">Bank Name: </div>
                            <div class="detail-amt" style="margin-right:80px;">
                                {{ $receipt_details->bank_details->code_label_1 }}
                            </div>
                        </li>
                        <li class="price-detail">
                            <div class="detail-title">A/C. No.</div>
                            <div class="detail-amt" style="margin-right:80px;">
                                {{ $receipt_details->bank_details->code_1 }}
                            </div>
                        </li>
                        <li class="price-detail">
                            <div class="detail-title">IFSC Code: </div>
                            <div class="detail-amt" style="margin-right:80px;">
                                {{ $receipt_details->bank_details->code_label_2 }}
                            </div>
                        </li>
                        <li class="price-detail">
                            <div class="detail-title">Branch: </div>
                            <div class="detail-amt" style="margin-right:80px;">
                                {{ $receipt_details->bank_details->code_2 }}
                            </div>
                        </li>


                    </ul>
                </td>
            </tr>
            {{-- <tr> --}}
            {{-- <td>Sub Total</td> --}}
            {{-- <th> {{ $receipt_details->subtotal }}</th> --}}
            {{-- </tr> --}}

            {{-- <tr> --}}
            {{-- <td>Sub Total</td> --}}
            {{-- @if (!empty($receipt_details->discount)) --}}
            {{-- <th>{{ number_format((float) ($receipt_details->subtotal_unformatted - $receipt_details->discount_unformatted),2,'.','') }} --}}
            {{-- </th> --}}
            {{-- @else --}}
            {{-- <th>{{ $receipt_details->subtotal }}</th> --}}
            {{-- @endif --}}

            {{-- </tr> --}}
           <tr>
            @if($hallmark=='7616')
                <td>CGST</td>
                <th> (+)
					@if(strtolower($receipt_details->state) === strtolower("Uttarakhand"))
                    <!-- {{ number_format((float) ($receipt_details->tax_cgst_sgst+$hallmark_price*9/100 + ($receipt_details->discount_unformatted * 3) / 100) / 2,2,'.','') }} -->
                    {{ number_format((float) ($receipt_details->tax_cgst_sgst)/ 2,2,'.','') }}
					@else
					{{'0.00'}}
					@endif
                </th>
            @else
            <td>CGST</td>
            <th> (+)
                @if(strtolower($receipt_details->state) === strtolower("Uttarakhand"))
                {{ number_format((float) ($receipt_details->tax_cgst_sgst + ($receipt_details->discount_unformatted * 3) / 100) / 2,2,'.','') }}
                @else
                {{'0.00'}}
                @endif
            </th>
            @endif
            </tr>
            <tr>
                @if($hallmark=='7616')
                <td>SGST</td>
                <th> (+)
					@if(strtolower($receipt_details->state) === strtolower("Uttarakhand"))
                    <!-- {{ number_format((float) ($receipt_details->tax_cgst_sgst +$hallmark_price*9/100+ ($receipt_details->discount_unformatted * 3) / 100) / 2,2,'.','') }} -->
                    {{ number_format((float) ($receipt_details->tax_cgst_sgst)/ 2,2,'.','') }}
					@else
					{{'0.00'}}
					@endif
                </th>
                @else
                <td>SGST</td>
                <th> (+)
					@if(strtolower($receipt_details->state) === strtolower("Uttarakhand"))
                    {{ number_format((float) ($receipt_details->tax_cgst_sgst + ($receipt_details->discount_unformatted * 3) / 100) / 2,2,'.','') }}
					@else
					{{'0.00'}}
					@endif
                </th>
                @endif
            </tr>
            <tr>
                <td>IGST(0.0)</td>
                <th> (+) 
					@if(strtolower($receipt_details->state) !== strtolower("Uttarakhand"))
					{{ number_format((float) ($receipt_details->tax_cgst_sgst + ($receipt_details->discount_unformatted * 3) / 100),2,'.','') }}
					@else
					{{ '0.00' }}</th>
				@endif
            </tr>
            <tr>
                <td>Sub Total</td>
                @if($hallmark=='7616')
                <!-- <th>{{ number_format((float) ($receipt_details->subtotal_unformatted +($receipt_details->tax_cgst_sgst+$hallmark_price*18/100 + ($receipt_details->discount_unformatted * 3) / 100)),2,'.','') }}
                </th> -->
                <th>{{ number_format((float) ($receipt_details->subtotal_unformatted + $receipt_details->tax_cgst_sgst),2,'.','') }}
                </th>
                @else
                <th>{{ number_format((float) ($receipt_details->subtotal_unformatted +($receipt_details->tax_cgst_sgst+ ($receipt_details->discount_unformatted * 3) / 100)),2,'.','') }}
                </th>
                @endif
            </tr>
            <tr>
                <td>Discount Rs.</td>
                
                <th>
                    @if (!empty($receipt_details->discount))
                        (-) {{ $receipt_details->discount }}
                    @endif
                </th>
            </tr>
            <tr>
                <td>Round Off</td>
                @if($hallmark=='7616')
                @php 
                $full_value=(string)number_format((float) ($receipt_details->subtotal_unformatted + $receipt_details->tax_cgst_sgst),2,'.','');
                $round_value=explode(".",$full_value);
                @endphp
                <th>{{"-0.".$round_value[1]}}</th>
                @else
                <th>{{$receipt_details->round_off}} </th>
                               
                @endif
                 
            </tr>
            <tr>
                <td>Total</td>
                @if($hallmark=='7616')
                <th>{{ $receipt_details->total_without_point }}</th>
                @else
                <th>{{ $receipt_details->total }}</th>
                @endif
            </tr>
            <tr>
                <th colspan="6">
                    @if (!empty($receipt_details->total_in_words))
                        Amt. Chargeable (Words)
                        {{ Str::title($receipt_details->total_in_words) }}
                    @endif
                </th>
            </tr>
            <tr>
                <td colspan="6">
                    <ul class="list-unstyled">
                        <li class="price-detail">
                            <div style="width:30%">
                                <div class="detail-title" style="width:100%;">Dr AMT:
                                    @if (!empty($receipt_details->total_paid))
                                    @if($hallmark=='7616')
                                    <b>{{ $receipt_details->total_paid }}</b>
                                    @else
                                    <b> {{ $receipt_details->total_paid }}</b>
                                    @endif
                                        
									@else
									<b> {{'0.00'}}</b>
                                    @endif
                                </div>
                            </div>
                            <div style="width:30%">
                                <div class="detail-title" style="width:100%;"> Cr AMT:
                                    @if (!empty($receipt_details->total_due) && !empty($receipt_details->total_due_label))
                                        <b>{{ $receipt_details->total_due }}</b>
									@else
									<b> {{'0.00'}}</b>
                                    @endif
                                </div>
                            </div>
                            <div style="width:40%">
                                <div class="detail-title" style="width:100%;"> PENDING AMOUNT:
                                    @if (!empty($receipt_details->total_due) && !empty($receipt_details->total_due_label))
                                        <b>{{ $receipt_details->total_due }}</b>
									@else
									<b> {{'0.00'}}</b>
                                    @endif
                                </div>
                            </div>
                        </li>
                    </ul>
                    {{-- Dr AMT:
                    @if (!empty($receipt_details->total_paid))
                        <b> {{ $receipt_details->total_paid }}</b>
                    @endif --}}
                </td>
                {{-- <td colspan="2">
                    Cr AMT:
                    @if (!empty($receipt_details->total_due) && !empty($receipt_details->total_due_label))
                        <b>{{ $receipt_details->total_due }}</b>
                    @endif
                </td> --}}
                {{-- <td colspan="2">PENDING AMOUNT:
                    @if (!empty($receipt_details->total_due) && !empty($receipt_details->total_due_label))
                        <b>{{ $receipt_details->total_due }}</b>
                    @endif
                </td> --}}
            </tr>
            <tr>
                <td colspan="4">

                    <p class="text-size">{{ $receipt_details->bank_details->terms_condition_1 }}</p>
                    <p class="text-size">{{ $receipt_details->bank_details->terms_condition_2 }}</p>
                    <p class="text-size">{{ $receipt_details->bank_details->terms_condition_3 }}</p>
                    <p class="text-size">{{ $receipt_details->bank_details->terms_condition_4 }}</p>

                </td>
                <td style="width:16%;text-align:center;"><b>Customer Signature</b></td>
                <td style="width:16%;text-align:center;"><b>For, SUVARNA JEWELLERS</b></td>
            </tr>

        </table>
        {{-- <table class="table table-responsive table-slim">
            <thead>
                <tr>
                    <th width="{{ $p_width }}%">{{ $receipt_details->table_product_label }}</th>
                    <th class="text-right" width="15%">{{ $receipt_details->table_qty_label }}</th>
                    <th class="text-right" width="15%">{{ $receipt_details->table_unit_price_label }}</th>
                    @if (!empty($receipt_details->item_discount_label))
                        <th class="text-right" width="15%">{{ $receipt_details->item_discount_label }}</th>
                    @endif
                    <th class="text-right" width="15%">{{ $receipt_details->table_subtotal_label }}</th>
                </tr>
            </thead>
            <tbody>
                @forelse($receipt_details->lines as $line)
                    <tr>
                        <td>
                            @if (!empty($line['image']))
                                <img src="{{ $line['image'] }}" alt="Image" width="50"
                                    style="float: left; margin-right: 8px;">
                            @endif
                            {{ $line['name'] }} {{ $line['product_variation'] }} {{ $line['variation'] }}
                            @if (!empty($line['sub_sku']))
                                , {{ $line['sub_sku'] }}
                                @endif @if (!empty($line['brand']))
                                    , {{ $line['brand'] }}
                                    @endif @if (!empty($line['cat_code']))
                                        , {{ $line['cat_code'] }}
                                    @endif
                                    @if (!empty($line['product_custom_fields']))
                                        , {{ $line['product_custom_fields'] }}
                                    @endif
                                    @if (!empty($line['sell_line_note']))
                                        <br>
                                        <small>
                                            {{ $line['sell_line_note'] }}
                                        </small>
                                    @endif
                                    @if (!empty($line['lot_number']))
                                        <br> {{ $line['lot_number_label'] }}: {{ $line['lot_number'] }}
                                    @endif
                                    @if (!empty($line['product_expiry']))
                                        , {{ $line['product_expiry_label'] }}: {{ $line['product_expiry'] }}
                                    @endif

                                    @if (!empty($line['warranty_name']))
                                        <br><small>{{ $line['warranty_name'] }} </small>
                                        @endif @if (!empty($line['warranty_exp_date']))
                                            <small>- {{ @format_date($line['warranty_exp_date']) }} </small>
                                        @endif
                                        @if (!empty($line['warranty_description']))
                                            <small> {{ $line['warranty_description'] ?? '' }}</small>
                                        @endif
                        </td>
                        <td class="text-right">{{ $line['quantity'] }} {{ $line['units'] }} </td>
                        <td class="text-right">{{ $line['unit_price_before_discount'] }}</td>
                        @if (!empty($receipt_details->item_discount_label))
                            <td class="text-right">
                                {{ $line['total_line_discount'] ?? '0.00' }}
                            </td>
                        @endif
                        <td class="text-right">{{ $line['line_total'] }}</td>
                    </tr>
                    @if (!empty($line['modifiers']))
                        @foreach ($line['modifiers'] as $modifier)
                            <tr>
                                <td>
                                    {{ $modifier['name'] }} {{ $modifier['variation'] }}
                                    @if (!empty($modifier['sub_sku']))
                                        , {{ $modifier['sub_sku'] }}
                                        @endif @if (!empty($modifier['cat_code']))
                                            , {{ $modifier['cat_code'] }}
                                        @endif
                                        @if (!empty($modifier['sell_line_note']))
                                            ({{ $modifier['sell_line_note'] }})
                                        @endif
                                </td>
                                <td class="text-right">{{ $modifier['quantity'] }} {{ $modifier['units'] }}
                                </td>
                                <td class="text-right">{{ $modifier['unit_price_inc_tax'] }}</td>
                                @if (!empty($receipt_details->item_discount_label))
                                    <td class="text-right">0.00</td>
                                @endif
                                <td class="text-right">{{ $modifier['line_total'] }}</td>
                            </tr>
                        @endforeach
                    @endif
                @empty
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                @endforelse
            </tbody>
        </table> --}}
    </div>
</div>

{{-- <div class="row">
    <div class="col-md-12">
        <hr />
    </div>
    <div class="col-xs-6">

        <table class="table table-slim">

            @if (!empty($receipt_details->payments))
                @foreach ($receipt_details->payments as $payment)
                    <tr>
                        <td>{{ $payment['method'] }}</td>
                        <td class="text-right">{{ $payment['amount'] }}</td>
                        <td class="text-right">{{ $payment['date'] }}</td>
                    </tr>
                @endforeach
            @endif

            <!-- Total Paid-->
            @if (!empty($receipt_details->total_paid))
                <tr>
                    <th>
                        {!! $receipt_details->total_paid_label !!}
                    </th>
                    <td class="text-right">
                        {{ $receipt_details->total_paid }}
                    </td>
                </tr>
            @endif

            <!-- Total Due-->
            @if (!empty($receipt_details->total_due) && !empty($receipt_details->total_due_label))
                <tr>
                    <th>
                        {!! $receipt_details->total_due_label !!}
                    </th>
                    <td class="text-right">
                        {{ $receipt_details->total_due }}
                    </td>
                </tr>
            @endif

            @if (!empty($receipt_details->all_due))
                <tr>
                    <th>
                        {!! $receipt_details->all_bal_label !!}
                    </th>
                    <td class="text-right">
                        {{ $receipt_details->all_due }}
                    </td>
                </tr>
            @endif
        </table>
    </div>

    <div class="col-xs-6">
        <div class="table-responsive">
            <table class="table table-slim">
                <tbody>
                    @if (!empty($receipt_details->total_quantity_label))
                        <tr>
                            <th style="width:70%">
                                {!! $receipt_details->total_quantity_label !!}
                            </th>
                            <td class="text-right">
                                {{ $receipt_details->total_quantity }}
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <th style="width:70%">
                            {!! $receipt_details->subtotal_label !!}
                        </th>
                        <td class="text-right">
                            {{ $receipt_details->subtotal }}
                        </td>
                    </tr>
                    @if (!empty($receipt_details->total_exempt_uf))
                        <tr>
                            <th style="width:70%">
                                @lang('lang_v1.exempt')
                            </th>
                            <td class="text-right">
                                {{ $receipt_details->total_exempt }}
                            </td>
                        </tr>
                    @endif
                    <!-- Shipping Charges -->
                    @if (!empty($receipt_details->shipping_charges))
                        <tr>
                            <th style="width:70%">
                                {!! $receipt_details->shipping_charges_label !!}
                            </th>
                            <td class="text-right">
                                {{ $receipt_details->shipping_charges }}
                            </td>
                        </tr>
                    @endif

                    @if (!empty($receipt_details->packing_charge))
                        <tr>
                            <th style="width:70%">
                                {!! $receipt_details->packing_charge_label !!}
                            </th>
                            <td class="text-right">
                                {{ $receipt_details->packing_charge }}
                            </td>
                        </tr>
                    @endif

                    <!-- Discount -->
                    @if (!empty($receipt_details->discount))
                        <tr>
                            <th>
                                {!! $receipt_details->discount_label !!}
                            </th>

                            <td class="text-right">
                                (-) {{ $receipt_details->discount }}
                            </td>
                        </tr>
                    @endif

                    @if (!empty($receipt_details->total_line_discount))
                        <tr>
                            <th>
                                {!! $receipt_details->line_discount_label !!}
                            </th>

                            <td class="text-right">
                                (-) {{ $receipt_details->total_line_discount }}
                            </td>
                        </tr>
                    @endif

                    @if (!empty($receipt_details->additional_expenses))
                        @foreach ($receipt_details->additional_expenses as $key => $val)
                            <tr>
                                <td>
                                    {{ $key }}:
                                </td>

                                <td class="text-right">
                                    (+)
                                    {{ $val }}
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!empty($receipt_details->reward_point_label))
                        <tr>
                            <th>
                                {!! $receipt_details->reward_point_label !!}
                            </th>

                            <td class="text-right">
                                (-) {{ $receipt_details->reward_point_amount }}
                            </td>
                        </tr>
                    @endif

                    <!-- Tax -->
                    @if (!empty($receipt_details->tax))
                        <tr>
                            <th>
                                {!! $receipt_details->tax_label !!}
                            </th>
                            <td class="text-right">
                                (+) {{ $receipt_details->tax }}
                            </td>
                        </tr>
                    @endif

                    @if ($receipt_details->round_off_amount > 0)
                        <tr>
                            <th>
                                {!! $receipt_details->round_off_label !!}
                            </th>
                            <td class="text-right">
                                {{ $receipt_details->round_off }}
                            </td>
                        </tr>
                    @endif

                    <!-- Total -->
                    <tr>
                        <th>
                            {!! $receipt_details->total_label !!}
                        </th>
                        <td class="text-right">
                            {{ $receipt_details->total }}
                            @if (!empty($receipt_details->total_in_words))
                                <br>
                                <small>({{ $receipt_details->total_in_words }})</small>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="border-bottom col-md-12">
        @if (empty($receipt_details->hide_price) && !empty($receipt_details->tax_summary_label))
            <!-- tax -->
            @if (!empty($receipt_details->taxes))
                <table class="table table-slim table-bordered">
                    <tr>
                        <th colspan="2" class="text-center">{{ $receipt_details->tax_summary_label }}</th>
                    </tr>
                    @foreach ($receipt_details->taxes as $key => $val)
                        <tr>
                            <td class="text-center"><b>{{ $key }}</b></td>
                            <td class="text-center">{{ $val }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        @endif
    </div>

    @if (!empty($receipt_details->additional_notes))
        <div class="col-xs-12">
            <p>{!! nl2br($receipt_details->additional_notes) !!}</p>
        </div>
    @endif

</div> --}}
<div class="row">
    <div class="col-md-12">
        {{-- <p class="text-center"><span class="text-red"><b>Email:</b></span> <b>suvarnajewellersddn@gmail.com</b> --}}
        {{-- | --}}
        {{-- <span class="text-red"><b>Web: </b></span> <b>www.suvarnajewellers.com</b> --}}
        {{-- </p> --}}
    </div>
    @if (!empty($receipt_details->footer_text))
        {{-- <div class="@if ($receipt_details->show_barcode || $receipt_details->show_qr_code) col-xs-8 @else col-xs-12 @endif">
            {!! $receipt_details->footer_text !!}
        </div> --}}
    @endif
    @if ($receipt_details->show_barcode || $receipt_details->show_qr_code)
        {{-- <div class="@if (!empty($receipt_details->footer_text)) col-xs-4 @else col-xs-12 @endif text-center">
            @if ($receipt_details->show_barcode)
                <img class="center-block"
                    src="data:image/png;base64,{{ DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2, 30, [39, 48, 54], true) }}">
            @endif

            @if ($receipt_details->show_qr_code && !empty($receipt_details->qr_code_text))
                <img class="center-block mt-5"
                    src="data:image/png;base64,{{ DNS2D::getBarcodePNG($receipt_details->qr_code_text, 'QRCODE', 3, 3, [39, 48, 54]) }}">
            @endif
        </div> --}}
    @endif
</div>

<style type="text/css">
    body {
        color: #000000;
    }

    .text-size {
        font-size: 12px;
    }

    .table-condensed>tbody>tr>td,
    .table-condensed>tbody>tr>th,
    .table-condensed>tfoot>tr>td,
    .table-condensed>tfoot>tr>th,
    .table-condensed>thead>tr>td,
    .table-condensed>thead>tr>th {
        padding: 2px;
    }

    .invoice-head {
        display: inline;
        float: right;
    }

    .invoice-center {
        margin-right: -30%;
    }

    .td-width {
        width: 50%;
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    .detail-title {
        width: 50%;
    }

    .detail-amt {
        width: 50%;
    }

    table,
    th,
    td {
        border-collapse: collapse;
    }

    td {
        border-top: none;
        border-bottom: none;
    }

    .price-detail {
        display: flex;
        width: 100%;
        {{-- display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin-bottom: 0.75rem; --}}
    }

    .table-bordered>tbody>tr>td,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>td,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>thead>tr>th {
        border: 1px solid black !important;
    }

</style>
