<br/>
<table style="width:100%;">
	<thead>
		<tr>
			{{-- <td>
			@if(!empty($receipt_details->invoice_heading))
				<p class="text-right text-muted-imp" style="font-weight: bold; font-size: 18px !important">{!! $receipt_details->invoice_heading !!}</p>
			@endif

			<p class="text-right">
				@if(!empty($receipt_details->invoice_no_prefix))
					{!! $receipt_details->invoice_no_prefix !!}
				@endif

				{{$receipt_details->invoice_no}}
			</p>

			</td> --}}
		</tr>
	</thead>

	<tbody>
		<tr>
			<td class="text-center" style="line-height: 15px !important; padding-bottom: 10px !important">

				@if(!empty($receipt_details->header_text))
					{!! $receipt_details->header_text !!}
				@endif

				@php
					$sub_headings = implode('<br/>', array_filter([$receipt_details->sub_heading_line1, $receipt_details->sub_heading_line2, $receipt_details->sub_heading_line3, $receipt_details->sub_heading_line4, $receipt_details->sub_heading_line5]));
				@endphp

				<!-- @if(!empty($sub_headings))
					<span>{!! $sub_headings !!}</span>
				@endif -->


                <!-- I have added the sub_headings lines 1 to 5. If the sub_heading is filled in the invoice layout, the sub_heading will be displayed. -->
				@if(!empty($receipt_details->sub_heading_line1))
					<span style="border:solid 1px black; border-radius: 4px; padding: 3px;">{!! $receipt_details->sub_heading_line1 !!}</span><br><br>
				@endif
				
				@if(!empty($receipt_details->sub_heading_line2))
					<span style="border:solid 1px black; border-radius: 4px; padding: 3px;">{!! $receipt_details->sub_heading_line2 !!}</span><br><br>
				@endif
				
				@if(!empty($receipt_details->sub_heading_line3))
					<span style="border:solid 1px black; border-radius: 4px; padding: 3px;">{!! $receipt_details->sub_heading_line3 !!}</span><br><br>
				@endif
				
				@if(!empty($receipt_details->sub_heading_line4))
					<span style="border:solid 1px black; border-radius: 4px; padding: 3px;">{!! $receipt_details->sub_heading_line4 !!}</span><br><br>
				@endif
                
                @if(!empty($receipt_details->sub_heading_line5))
					<span style="border:solid 1px black; border-radius: 4px; padding: 3px;">{!! $receipt_details->sub_heading_line5 !!}</span><br><br>
				@endif
				
				@if(!empty($receipt_details->invoice_heading))
					<p class="" style="font-weight: bold; font-size: 20px !important">{!! $receipt_details->invoice_heading !!}</p>
					<hr style="center" width="50%">
				@endif

<!-- business information here -->
<div class="row invoice-info">
	<div class="col-md-6 invoice-col width-50 color-555">
		
		<!-- Logo -->
		@if(!empty($receipt_details->logo))
			<img src="{{$receipt_details->logo}}" class="img">
			<br/>
		@endif
                
		<!-- Shop & Location Name  -->
		@if(!empty($receipt_details->display_name))
			<p>
				{{$receipt_details->display_name}}<br/>
				{!! $receipt_details->address !!}

				@if(!empty($receipt_details->contact))<br/>
				    {{ $receipt_details->contact }}
				@endif

				@if(!empty($receipt_details->website))<br/>
					{{ $receipt_details->website }}
				@endif

				@if(!empty($receipt_details->tax_info1))<br/>
				    {{ $receipt_details->tax_label1 }} {{ $receipt_details->tax_info1 }}
				@endif

				@if(!empty($receipt_details->tax_info2))<br/>
				    {{ $receipt_details->tax_label2 }} {{ $receipt_details->tax_info2 }}
				@endif

				@if(!empty($receipt_details->location_custom_fields))<br/>
				    {{ $receipt_details->location_custom_fields }}
				@endif

                @if(!empty($receipt_details->invoice_heading))<br/>
                    {!! $receipt_details->invoice_heading !!}
				@endif
			</p>
		@endif

		<!-- Table information-->
        @if(!empty($receipt_details->table_label) || !empty($receipt_details->table))
        	<p>
				@if(!empty($receipt_details->table_label))
					{!! $receipt_details->table_label !!}
				@endif
				{{$receipt_details->table}}
			</p>
        @endif

		<!-- Waiter info -->
		@if(!empty($receipt_details->waiter_label) || !empty($receipt_details->waiter))
        	<p>
				@if(!empty($receipt_details->waiter_label))
					{!! $receipt_details->waiter_label !!}
				@endif
				{{$receipt_details->waiter}}
			</p>
        @endif
	</div>

	<div class="col-md-6 invoice-col width-50">

		{{-- <p class="text-right font-30">
			@if(!empty($receipt_details->invoice_no_prefix))
				<span class="pull-left">{!! $receipt_details->invoice_no_prefix !!}</span>
			@endif
			{{$receipt_details->invoice_no}}
		</p> --}}

		{{-- <table class="table table-condensed">
				@if(!empty($receipt_details->payments))
					@foreach($receipt_details->payments as $payment)
						<tr>
							<td>{{$payment['method']}}</td>
							<td>{{$payment['amount']}}</td>
						</tr>
					@endforeach
				@endif
			</table> --}}

		<!-- Total Due-->
		{{-- @if(!empty($receipt_details->total_due))
			<p class="bg-light-blue-active text-right font-23 padding-5">
				<span class="pull-left bg-light-blue-active">
					{!! $receipt_details->total_due_label !!}
				</span>
				{{$receipt_details->total_due}}
			</p>
		@endif --}}
		
		<!-- Total Paid-->
		{{-- @if(!empty($receipt_details->total_paid))
			<p class="text-right font-23 color-555">
				<span class="pull-left">{!! $receipt_details->total_paid_label !!}</span>
				{{$receipt_details->total_paid}}
			</p>
		@endif --}}

		<!-- Date-->
		{{-- @if(!empty($receipt_details->date_label))
			<p class="text-right font-23 color-555">
				<span class="pull-left">
					{{$receipt_details->date_label}}
				</span>

				{{$receipt_details->invoice_date}}
			</p>
		@endif --}}
	</div>
</div>

<div class="row invoice-info color-555">
	<br/>
	<div class="col-md-6 invoice-col width-50 word-wrap">
		{{-- parent_invoice --}}
		{{-- <b>{!! $receipt_details->parent_label !!}</b><br/>
		@if(isset($receipt_details->parent_invoice_no) && !empty($receipt_details->parent_invoice_no))
			<strong>@lang('sale.invoice_no'):</strong> {!! $receipt_details->parent_invoice_no !!}<br>
		@endif
		@if(isset($receipt_details->parent_transaction_date) && !empty($receipt_details->parent_transaction_date))
			<strong>@lang('messages.date'):</strong> {!! @format_datetime($receipt_details->parent_transaction_date) !!}<br>
		@endif 
		<br> --}}
		{{-- <b>{{ $receipt_details->customer_label ?? '' }}</b><br/> --}}

		<!-- customer info -->
		{{-- @if(!empty($receipt_details->customer_name))
			{!! $receipt_details->customer_name !!}<br>
		@endif
		@if(!empty($receipt_details->customer_info))
			{!! $receipt_details->customer_info !!}
		@endif
		@if(!empty($receipt_details->client_id_label))
			<br/>
			{{ $receipt_details->client_id_label }} {{ $receipt_details->client_id }}
		@endif
		@if(!empty($receipt_details->customer_tax_label))
			<br/>
			{{ $receipt_details->customer_tax_label }} {{ $receipt_details->customer_tax_number }}
		@endif
		@if(!empty($receipt_details->customer_custom_fields))
			<br/>{!! $receipt_details->customer_custom_fields !!}
		@endif --}}
	</div>

	<div class="col-md-6 invoice-col width-50 word-wrap">
		<div class='m-5 p-5'></div>
		<p style="margin-top:8vh;">
			{{-- @if(!empty($receipt_details->sub_heading_line1))
				{{ $receipt_details->sub_heading_line1 }}
			@endif
			@if(!empty($receipt_details->sub_heading_line2))
				<br>{{ $receipt_details->sub_heading_line2 }}
			@endif
			@if(!empty($receipt_details->sub_heading_line3))
				<br>{{ $receipt_details->sub_heading_line3 }}
			@endif
			@if(!empty($receipt_details->sub_heading_line4))
				<br>{{ $receipt_details->sub_heading_line4 }}
			@endif		
			@if(!empty($receipt_details->sub_heading_line5))
				<br>{{ $receipt_details->sub_heading_line5 }}
			@endif --}}
		</p>
	</div>
	
</div>

<!-- If display language is arabic, then keep display to RTL -->
@if(App::getLocale() == 'ar')
<!--- Invoice table -->
<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 50%; color: black !important;" class="left">
    @if(isset($receipt_details->parent_invoice_no) && !empty($receipt_details->parent_invoice_no))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">رقم فاتورة الشراء</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"> {!! $receipt_details->parent_invoice_no !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Sale Invoice No.</td>
    </tr>
@endif

    @if(isset($receipt_details->parent_transaction_date) && !empty($receipt_details->parent_transaction_date))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">تاريخ فاتورة الشراء</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! @format_datetime($receipt_details->parent_transaction_date) !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;"> Invoice Date </td>
    </tr>
    @endif

    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">رقم فاتورة المرتجع</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{$receipt_details->invoice_no}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Return Invoice Number</td>
    </tr>

    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">تاريخ فاتورة المرتجع</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{$receipt_details->invoice_date}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Return Invoice Date</td>
    </tr>

    @if(!empty($receipt_details->customer_name))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">اسم العميل</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->customer_name !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Customer Name</td>
    </tr>
    @endif
   
   	@if(!empty($receipt_details->customer_info))
	<tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">عنوان العميل</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->customer_info !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Customer Address</td>
    </tr>
	@endif
	
	@if(!empty($receipt_details->client_id_label))
	<tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">رقم العميل</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->client_id }}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Customer ID</td>
    </tr>
	@endif
	
	@if(!empty($receipt_details->customer_custom_fields))
	<tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">رقم السجل التجتري</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->customer_custom_fields !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Customer CR#</td>
    </tr>
	@endif

    @if(!empty($receipt_details->customer_tax_number))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> الرقم الضريبي </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_tax_number}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_tax_label }}</td>
    </tr>
    @endif

    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> اسم المستلم </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->sales_person }}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Recipient Name</td>
    </tr>    
</table>

<!-- If display language is not arabic, then keep display to LTR -->
@else
<!--- Invoice table -->
<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 50%; color: black !important;" class="left">
     @if(isset($receipt_details->parent_invoice_no) && !empty($receipt_details->parent_invoice_no))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> Sale Invoice No. </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"> {!! $receipt_details->parent_invoice_no !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">رقم فاتورة الشراء</td>
    </tr>
@endif
  
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> Invoice Date </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! @format_datetime($receipt_details->parent_transaction_date) !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">تاريخ فاتورة الشراء</td>
    </tr>

<tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> Return Invoice Number </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{$receipt_details->invoice_no}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">رقم فاتورة المرتجع</td>
    </tr>
   
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> Return Invoice Date </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{$receipt_details->invoice_date}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">تاريخ فاتورة المرتجع</td>
    </tr>

    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> Customer Name </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->customer_name !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">اسم العميل</td>
    </tr>
    
	@if(!empty($receipt_details->customer_info))
	<tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> Customer Adress </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->customer_info !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">عنوان العميل</td>
    </tr>
	@endif
	
	@if(!empty($receipt_details->client_id_label))
	<tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> Customer ID </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->client_id }}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">رقم العميل</td>
    </tr>
	@endif
	
	@if(!empty($receipt_details->customer_custom_fields))
	<tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> Customer CR </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->customer_custom_fields !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">رقم السجل التجاري</td>
    </tr>
	@endif

    @if(!empty($receipt_details->customer_tax_number))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_tax_label }}</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_tax_number}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">الرقم الضريبي</td>
    </tr>
    @endif

    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">Recipient Name</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->sales_person }}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">اسم المستلم</td>
    </tr>
</table>
@endif

<div class="row color-000000">
	<div class="col-xs-12">
		<br/>
		<table style="width:100%; border: 1px solid black; border-collapse: collapse" color: black>
			<thead style="style="width:100%; border: 1px solid black; border-collapse: collapse">
				<tr>
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">No</td>
					
					@php
						$p_width = 35;
					@endphp
					@if($receipt_details->show_cat_code != 1)
						@php
							$p_width = 45;
						@endphp
					@endif
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">
						اسم الصنف<br>{{$receipt_details->table_product_label}}
					</td>

					{{-- @if($receipt_details->show_cat_code == 1)
						<td style="background-color: #357ca5 !important; color: white !important; width: 10% !important">{{$receipt_details->cat_code_label}}</td>
					@endif --}}
					
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">
						الكمية<br>{{$receipt_details->table_qty_label}}
					</td>
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">
						السعر<br>{{$receipt_details->table_unit_price_label}}
					</td>
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">
						الضريبة<br>{{$receipt_details->table_unit_tax_label}}
					</td>
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">
						المجموع<br>{{$receipt_details->table_subtotal_label}}
					</td>
				</tr>
			</thead>
			<tbody style="border: 1px solid black; border-collapse: collapse; color: black !important;">
				@foreach($receipt_details->lines as $line)
					<tr style="border: 1px solid black; border-collapse: collapse">
						<td class="text-center">
							{{$loop->iteration}}
						</td>
						<td style="border: 1px solid black; border-collapse: collapse;" valign="top" class="text-center">
                            {{$line['name']}} {{$line['variation']}} 
                            @if(!empty($line['sub_sku'])), {{$line['sub_sku']}} @endif @if(!empty($line['brand'])), {{$line['brand']}} @endif
                            @if(!empty($line['sell_line_note']))({{$line['sell_line_note']}}) @endif 
                        </td>

				{{-- 		@if($receipt_details->show_cat_code == 1)
	                        <td>
	                        	@if(!empty($line['cat_code']))
	                        		{{$line['cat_code']}}
	                        	@endif
	                        </td>
	                    @endif --}}

						<td style="border: 1px solid black; border-collapse: collapse;" valign="top" class="text-center">
							{{$line['quantity']}} {{$line['units']}}
						</td>
						<td style="border: 1px solid black; border-collapse: collapse;" valign="top" class="text-center">
							{{$line['unit_price_exc_tax']}}
						</td>
						<td style="border: 1px solid black; border-collapse: collapse;" valign="top" class="text-center">
							{{isset($line['tax']) ? $line['tax']: 0}}
						</td>
						<td style="border: 1px solid black; border-collapse: collapse;" valign="top" class="text-center">
							{{$line['line_total']}}
						</td>
					</tr>
				@endforeach

				@php
					$lines = count($receipt_details->lines);
				@endphp

				@for ($i = $lines; $i < 7; $i++)
    				{{--	<tr>
    				<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp;</td>
    				</tr> --}}
				@endfor

			</tbody>
		</table>
	</div>
</div>
<br>
<!-- If display language is arabic, then keep display to RTL -->
@if(App::getLocale() == 'ar')
<div class="row invoice-info color-555" style="page-break-inside: avoid !important">
	<div class="col-md-6 invoice-col width-50">
		<b class="pull-left">Authorized Signatory</b>
	</div>

	<div class="col-md-6 invoice-col width-50">
		<table class="table-no-side-cell-border table-no-top-cell-border width-100">
			<tbody>
    <!-- Total Items -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">  عدد الاصناف </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ isset($receipt_details->total_returned_items) ? $receipt_details->total_returned_items: 0}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Returned Items					
        </td>
    </tr>  

    <!-- Total Quantity -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">  الكمية المرتجعة </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ isset($receipt_details->total_quantity_returned) ? $receipt_details->total_quantity_returned: 0}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Returned Quantity					
        </td>

    <!-- SubTotal without Tax -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> الإجمالي قبل الضريبة </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{isset($receipt_details->price_exc_tax_total) ? $receipt_details->price_exc_tax_total: 0}}</span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Returned Amount (Before VAT)
        </td>
    </tr> 

    <!-- Tax -->
    @if(!empty($receipt_details->taxes))
		@foreach($receipt_details->taxes as $k => $v)
			<tr class="color-555">
				<td>{{$k}}</td>
					<td class="text-right">{{$v}}</td>
			</tr>
		@endforeach
	@endif

    <!-- Total Tax -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">  مبلغ الضريبة (+)</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{isset($receipt_details->tax_total) ? $receipt_details->tax_total: 0}}</span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Returned VAT (+)
        </td>
    </tr> 

    <!-- SubTotal -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">  مبلغ فاتورة المرتجع </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->subtotal}}</span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Return {!! $receipt_details->subtotal_label !!}						
        </td>
    </tr>
    
    <!-- Discount -->
    @if( !empty($receipt_details->discount) )
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">   مبلغ الخصم  (-)</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";> {{$receipt_details->discount}} </span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Return {!! $receipt_details->discount_label !!} (-)						
        </td>
    </tr>  
    @endif
    
    <!-- Total -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">إجمالي مبلغ المرتجع</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";> {{$receipt_details->discount}} </span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Total Retuned Amount
        </td>
    </tr>  


	<!-- Total Items -->
				{{-- <tr class="color-555">
					<td style="width:50%">
						عدد الاصناف
					</td>
					<td class="text-center">
						{{ isset($receipt_details->total_returned_items) ? $receipt_details->total_returned_items: 0}}
					</td>
                                          <td class="text-right">
						{{ $receipt_details->total_item_returned_label }}
					</td>
				</tr> --}}
				<!-- Total Quantity -->
				{{-- <tr class="color-555">
					<td style="width:50%">
						الكمية المرتجعة
					</td>
					<td class="text-center">
						{{ isset($receipt_details->total_quantity_returned) ? $receipt_details->total_quantity_returned: 0}}
					</td>
                                          <td class="text-right">
						{{ $receipt_details->total_returned_qty_label }}
					</td>
				</tr> --}}
				<!-- SubTotal without Tax -->
				{{-- <tr class="color-555">
					<td style="width:50%">
						الإجمالي قبل الضريبة
					</td>
					<td class="text-center">
						{{isset($receipt_details->price_exc_tax_total) ? $receipt_details->price_exc_tax_total: 0}}
					</td>
                                           <td class="text-right">
						{{ $receipt_details->total_amount_returned_wt_label }}
					</td>
				</tr> --}}

				<!-- Discount -->
				{{-- @if( !empty($receipt_details->discount) )
					<tr class="color-555">
						<td>
							مبلغ الخصم
						</td>

						<td class="text-center">
							(-) {{$receipt_details->discount}}
						</td>
                                                  <td class="text-right">
						{!! $receipt_details->discount_label !!}
					</td>
					</tr>
				@endif --}}

				<!-- Tax -->
				{{-- @if(!empty($receipt_details->taxes))
					@foreach($receipt_details->taxes as $k => $v)
						<tr class="color-555">
							<td>{{$k}}</td>
							<td class="text-right">{{$v}}</td>
						</tr>
					@endforeach
				@endif --}}
				<!-- Total Tax -->
				{{-- <tr class="color-555">
					<td style="width:50%">
						مبلغ الضريبة
					</td>
					<td class="text-center">
						(+) {{isset($receipt_details->tax_total) ? $receipt_details->tax_total: 0}}
					</td>
                                          <td class="text-right">
						{{ $receipt_details->total_tax_returned_label }}
					</td>
				</tr> 

				<tr class="color-555">
					<td style="width:50%">
						إجمالي مبلغ المرتجع
					</td>
					<td class="text-center">
						{{$receipt_details->subtotal}}
					</td>
                                          <td class="text-right">
						{!! $receipt_details->subtotal_label !!}
					</td>
				</tr>

				@if(!empty($receipt_details->group_tax_details))
					@foreach($receipt_details->group_tax_details as $key => $value)
						<tr class="color-555">
							<td>
								{!! $key !!}
							</td>
							<td class="text-right">
								(+) {{$value}}
							</td>
						</tr>
					@endforeach
				@else
					@if( !empty($receipt_details->tax) )
						<tr class="color-555">
							<td>
								مبلغ الضريبة
							</td>
							<td class="text-center">
								(+) {{$receipt_details->tax}}
							</td>
                                                           <td class="text-right">
						{!! $receipt_details->tax_label !!}
					</td>
						</tr>
					@endif
				@endif --}}

                                  <!-- Discount -->
				{{-- @if( !empty($receipt_details->discount) )
					<tr class="color-555">
						<td>
							مبلغ الخصم
						</td>

						<td class="text-center">
							(-) {{$receipt_details->discount}}
						</td>
                                                  <td class="text-right">
						{!! $receipt_details->discount_label !!}
					</td>
					</tr>
				@endif --}}

                               
				
				<!-- Total -->
				{{--<tr>
					<th style="background-color: #357ca5 !important; color: white !important" class="font-23 padding-10">
						إجمالي مبلغ المرتجع
					</th>
					<td class="text-center font-23 padding-10" style="background-color: #357ca5 !important; color: white !important">
						{{$receipt_details->total}}
					</td>
                                           <td class="text-right">
						{!! $receipt_details->total_label !!}
					</td>
				</tr> --}}
			</tbody>
        </table>
	</div>
</div>

<!-- If display language is not arabic, then keep display to LTR -->
@else
<div class="row invoice-info color-555" style="page-break-inside: avoid !important">
	<div class="col-md-6 invoice-col width-50">
		<b class="pull-left">Authorized Signatory</b>
	</div>

	<div class="col-md-6 invoice-col width-50">
		<table class="table-no-side-cell-border table-no-top-cell-border width-100">
			<tbody>
    <!-- Total Items -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">Returned Items</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ isset($receipt_details->total_returned_items) ? $receipt_details->total_returned_items: 0}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">						عدد الاصناف
        </td>
    </tr>  

    <!-- Total Quantity -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">Returned Quantity</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ isset($receipt_details->total_quantity_returned) ? $receipt_details->total_quantity_returned: 0}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">						الكمية المرتجعة
        </td>

    <!-- SubTotal without Tax -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">Returned Amount (Before VAT)</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{isset($receipt_details->price_exc_tax_total) ? $receipt_details->price_exc_tax_total: 0}}</span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">												الإجمالي قبل الضريبة
        </td>
    </tr> 

    <!-- Tax -->
	@if(!empty($receipt_details->taxes))
		@foreach($receipt_details->taxes as $k => $v)
			<tr class="color-555">
				<td>{{$k}}</td>
				<td class="text-right">{{$v}}</td>
			</tr>
		@endforeach
	@endif

    <!-- Total Tax -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">Returned VAT (+)</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{isset($receipt_details->tax_total) ? $receipt_details->tax_total: 0}}</span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">				(+)		مبلغ الضريبة
        </td>
    </tr> 

    <!-- SubTotal -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">Return {!! $receipt_details->subtotal_label !!} </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->subtotal}}</span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">مبلغ فاتورة المرتجع
        </td>
    </tr>
    
    <!-- Discount -->
    @if( !empty($receipt_details->discount) )
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">Return {!! $receipt_details->discount_label !!} (-)</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";> {{$receipt_details->discount}} </span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">				(-) 		مبلغ الخصم
        </td>
    </tr>  
    @endif
    
    <!-- Total -->
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">Total Retuned Amount</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->total}}</span></td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">إجمالي مبلغ المرتجع
        </td>
    </tr>  

	<!-- Total Items -->
		{{-- <tr class="color-555">
					<td style="width:50%">
						{{ $receipt_details->total_item_returned_label }}
					</td>
					<td class="text-center">
						{{ isset($receipt_details->total_returned_items) ? $receipt_details->total_returned_items: 0}}
					</td>
                                          <td class="text-right">
						عدد الاصناف
					</td> 
				</tr> --}}
				<!-- Total Quantity -->
				{{-- <tr class="color-555">
					<td style="width:50%">
						{{ $receipt_details->total_returned_qty_label }}
					</td>
					<td class="text-center">
						{{ isset($receipt_details->total_quantity_returned) ? $receipt_details->total_quantity_returned: 0}}
					</td>
                                          <td class="text-right">
						الكمية المرتجعة
					</td>
				</tr> --}}
				<!-- SubTotal without Tax -->
				{{-- <tr class="color-555">
					<td style="width:50%">
						{{ $receipt_details->total_amount_returned_wt_label }}
					</td>
					<td class="text-center">
						<span class="display_currency" data-currency_symbol="false";>{{isset($receipt_details->price_exc_tax_total) ? $receipt_details->price_exc_tax_total: 0}}</span>
					</td>
                                           <td class="text-right">
						الإجمالي قبل الضريبة
					</td>
				</tr> --}}

                                  <!-- Tax -->
				{{-- @if(!empty($receipt_details->taxes))
					@foreach($receipt_details->taxes as $k => $v)
						<tr class="color-555">
							<td>{{$k}}</td>
							<td class="text-right">{{$v}}</td>
						</tr>
					@endforeach
				@endif --}}
				<!-- Total Tax -->
				{{-- <tr class="color-555">
					<td style="width:50%">
						{{ $receipt_details->total_tax_returned_label }}
					</td>
					<td class="text-center">
						(+) <span class="display_currency" data-currency_symbol="false";>{{isset($receipt_details->tax_total) ? $receipt_details->tax_total: 0}}</span>
					</td>
                                          <td class="text-right">
						مبلغ الضريبة
					</td>
				</tr> --}}

				

				{{-- @if(!empty($receipt_details->group_tax_details))
					@foreach($receipt_details->group_tax_details as $key => $value)
						<tr class="color-555">
							<td>
								{!! $key !!}
							</td>
							<td class="text-right">
								(+) {{$value}}
							</td>
						</tr>
					@endforeach
				@else
					@if( !empty($receipt_details->tax) )
						<tr class="color-555">
							<td>
								{!! $receipt_details->tax_label !!}
							</td>
							<td class="text-center">
								(+) {{$receipt_details->tax}}
							</td>
                                                           <td class="text-right">
						مبلغ الضريبة
					</td>
						</tr>
					@endif
				@endif --}}

				<!-- Discount -->
				{{-- @if( !empty($receipt_details->discount) )
					<tr class="color-555">
						<td>
							{!! $receipt_details->discount_label !!}
						</td>

						<td class="text-center">
							(-) <span class="display_currency" data-currency_symbol="false";> {{$receipt_details->discount}} </span>
						</td>
                                                  <td class="text-right">
						مبلغ الخصم
					</td>
					</tr>
				@endif --}}

				<!-- Tax -->
				{{-- @if(!empty($receipt_details->taxes))
					@foreach($receipt_details->taxes as $k => $v)
						<tr class="color-555">
							<td>{{$k}}</td>
							<td class="text-right">{{$v}}</td>
						</tr>
					@endforeach
				@endif --}}
				<!-- Total Tax -->
				   {{-- <tr class="color-555">
					<td style="width:50%">
						{{ $receipt_details->total_tax_returned_label }}
					</td>
					<td class="text-center">
						(+) {{isset($receipt_details->tax_total) ? $receipt_details->tax_total: 0}}
					</td>
                                          <td class="text-right">
						مبلغ الضريبة
					</td>
				</tr> --}}

				 {{-- <tr class="color-555">
					<td style="width:50%">
						{!! $receipt_details->subtotal_label !!}
					</td>
					<td class="text-center">
						<span class="display_currency" data-currency_symbol="false";> {{$receipt_details->subtotal}} </span>
					</td>
                                          <td class="text-right">
						إجمالي مبلغ المرتجع
					</td>
				</tr> --}}

				{{-- @if(!empty($receipt_details->group_tax_details))
					@foreach($receipt_details->group_tax_details as $key => $value)
						<tr class="color-555">
							<td>
								{!! $key !!}
							</td>
							<td class="text-right">
								(+) {{$value}}
							</td>
						</tr>
					@endforeach
				@else --}}
					{{-- @if( !empty($receipt_details->tax) )
						<tr class="color-555">
							<td>
								{!! $receipt_details->tax_label !!}
							</td>
							<td class="text-center">
								(+) {{$receipt_details->tax}}
							</td>
                                                           <td class="text-right">
						مبلغ الضريبة
					</td>
						</tr>
					@endif
				@endif --}}
				
				<!-- Total -->
				 {{-- <tr>
					<th style="background-color: #357ca5 !important; color: white !important" class="font-23 padding-10">
						{!! $receipt_details->total_label !!}
					</th>
					<td class="text-center font-23 padding-10" style="background-color: #357ca5 !important; color: white !important">
						<span class="display_currency" data-currency_symbol="false";> {{$receipt_details->total}} </span>
					</td>
                                           <td class="text-right">
						إجمالي مبلغ المرتجع
					</td>
				</tr> --}}
			</tbody>
        </table>
	</div>
</div>
@endif

</br>

<div class="row color-555">
	{{-- <div class="col-xs-6">
		{{$receipt_details->additional_notes}}
	</div> --}}

	{{-- Barcode --}}
	{{-- @if($receipt_details->show_barcode)
		<div class="col-xs-6">
			<img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">
		</div>
	@endif --}}
</div>

{{-- Barcode & QRCode --}}
<div class="row">
		<div class="col-xs-12">
			@if($receipt_details->show_barcode || $receipt_details->show_qr_code)
		
			@if($receipt_details->show_barcode)
				{{-- Barcode --}}
				<img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">
			@endif
                         </br>
			
			{{-- @if($receipt_details->show_qr_code && !empty($receipt_details->qr_code_details))
			@php
				$qr_code_text = implode(', ', $receipt_details->qr_code_details);
			@endphp
				<img class="center-block mt-5" src="data:image/png;base64,{{DNS2D::getBarcodePNG($qr_code_text, 'QRCODE', 4, 4, [39, 48, 54])}}">
			@endif --}}
		
	@endif
		</div>
</div>

@if(!empty($receipt_details->footer_text))
	<div class="row color-555">
		<div class="col-xs-12">
			{!! $receipt_details->footer_text !!}
		</div>
	</div>
@endif

			</td>
		</tr>
	</tbody>
</table>