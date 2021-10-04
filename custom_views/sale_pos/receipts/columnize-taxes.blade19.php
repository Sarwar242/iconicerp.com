@php
	$totals = ['taxable_value' => 0];
@endphp

@if(App::getLocale() == 'en')
    <link href="ltr.css" type="stylesheet" />
@else
    <link href="rtl.css" type="stylesheet" />
@endif

<table style="width:100%;">
    <thead>
		<!-- <tr>
			<td class="pull-right">
				<small class="text-muted-imp">
					@if(!empty($receipt_details->invoice_no_prefix))
						{!! $receipt_details->invoice_no_prefix !!}
					@endif

					{{$receipt_details->invoice_no}}
				</small>
			</td>
		</tr> -->
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
			</td>
		</tr>
		<!-- Logo (I removed the logo)
		@if(!empty($receipt_details->logo))
			<img src="{{$receipt_details->logo}}" class="img center-block">
			<br/>
		@endif-->

		<!-- Shop & Location Name  -->
		<!-- @if(!empty($receipt_details->display_name))
			<p>
				{{$receipt_details->display_name}}
				@if(!empty($receipt_details->address))
					<br/>{!! $receipt_details->address !!}
				@endif

				@if(!empty($receipt_details->contact))
					<br/>{{ $receipt_details->contact }}
				@endif

				@if(!empty($receipt_details->website))
					<br/>{{ $receipt_details->website }}
				@endif

				@if(!empty($receipt_details->tax_info1))
					<br/>{{ $receipt_details->tax_label1 }} {{ $receipt_details->tax_info1 }}
				@endif

				@if(!empty($receipt_details->tax_info2))
					<br/>{{ $receipt_details->tax_label2 }} {{ $receipt_details->tax_info2 }}
				@endif

				@if(!empty($receipt_details->location_custom_fields))
					<br/>{{ $receipt_details->location_custom_fields }}
				@endif
			</p>
		@endif -->

		<tr>
			<td>

<!-- business information here -->
<div class="row invoice-info">

	<div class="col-md-6 invoice-col width-50">
		{{-- <div class="text-right font-16">
			@if(!empty($receipt_details->invoice_no_prefix))
				<span class="pull-left">{!! $receipt_details->invoice_no_prefix !!}</span>
			@endif
			{{$receipt_details->invoice_no}}
		</div> --}}

       <!-- Date-->
		{{-- @if(!empty($receipt_details->date_label))
			<div class="text-right font-16 color-000000">
				<span class="pull-left">
					{{$receipt_details->date_label}}
				</span>

				{{$receipt_details->invoice_date}}
			</div>
		@endif --}}

		<!-- Total Due -->
		<!-- @if(!empty($receipt_details->total_due))
			<div class="text-right font-16 padding-0">
				<span class="pull-left">
					{!! $receipt_details->total_due_label !!}
				</span>

				{{$receipt_details->total_due}}
			</div>
		@endif -->

		<!-- All Due-->
		<!-- @if(!empty($receipt_details->all_due))
			<div class="text-right font-16 padding-0">
				<span class="pull-left">
					{!! $receipt_details->all_bal_label !!}
				</span>

				{{$receipt_details->all_due}}
			</div>
		@endif -->
		
		<!-- Total Paid-->
		<!-- @if(!empty($receipt_details->total_paid))
			<div class="text-right font-16 color-000000">
				<span class="pull-left">{!! $receipt_details->total_paid_label !!}</span>
				{{$receipt_details->total_paid}}
			</div>
		@endif -->
		
		<!-- Due Date-->
		<!-- @if(!empty($receipt_details->due_date_label))
			<div class="text-right font-23 color-555">
				<span class="pull-left">
					{{$receipt_details->due_date_label}}
				</span>

				{{$receipt_details->due_date ?? ''}}
			</div>
		@endif -->
		
        <!-- Customer Label -->
		{{-- <div class="word-wrap">
			@if(!empty($receipt_details->customer_label))
				{{ $receipt_details->customer_label }}
			@endif

			<!-- Customer Info -->
			<!-- @if(!empty($receipt_details->customer_name))
				<b>{{ $receipt_details->customer_name }}</b><br>
			@endif -->
			@if(!empty($receipt_details->customer_info))
				{!! $receipt_details->customer_info !!}
			@endif
			@if(!empty($receipt_details->client_id_label))
				<br/>
				<strong>{{ $receipt_details->client_id_label }}</strong> {{ $receipt_details->client_id }}
			@endif
			@if(!empty($receipt_details->customer_tax_number))
				<br/>
				<strong>{{ $receipt_details->customer_tax_label }}</strong> {{ $receipt_details->customer_tax_number}}
			@endif
			@if(!empty($receipt_details->customer_custom_fields))
				<br/>{!! $receipt_details->customer_custom_fields !!}
			@endif
			
			<!-- Do Not Display Rewards If Customer Is Walk-In Customer -->
			@if(($receipt_details->customer_name !== 'Walk-In Customer'))
		    	@if(!empty($receipt_details->customer_rp_label))<br>
			    	{{ $receipt_details->customer_rp_label }} {{ $receipt_details->customer_total_rp }}
		    	@endif <br>
            @endif --}}
                
            <!-- Sales Person -->    
		{{-- 	@if(!empty($receipt_details->sales_person_label))
				{{ $receipt_details->sales_person_label }} {{ $receipt_details->sales_person }}
			@endif
			
			<!-- Display type of service details -->
			@if(!empty($receipt_details->types_of_service))
				<span class="pull-left text-left">
					<strong>{!! $receipt_details->types_of_service_label !!}:</strong>
					{{$receipt_details->types_of_service}}
					<!-- Waiter info -->
					@if(!empty($receipt_details->types_of_service_custom_fields))
						<br>
						@foreach($receipt_details->types_of_service_custom_fields as $key => $value)
							<strong>{{$key}}: </strong> {{$value}}@if(!$loop->last), @endif
						@endforeach
					@endif
				</span>
			@endif --}}
		</div>
	</div> 

	<div class="col-md-6 invoice-col width-50 color-555">
		
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
		@if(!empty($receipt_details->service_staff_label) || !empty($receipt_details->service_staff))
        	<p>
				@if(!empty($receipt_details->service_staff_label))
					{!! $receipt_details->service_staff_label !!}
				@endif
				{{$receipt_details->service_staff}}
			</p>
        @endif

        <div class="word-wrap">

			<p class="text-right color-555">
			    
            <!-- Brand lable -->
			@if(!empty($receipt_details->brand_label) || !empty($receipt_details->repair_brand))
				@if(!empty($receipt_details->brand_label))
					<span class="pull-left">
						<strong>{!! $receipt_details->brand_label !!}</strong>
					</span>
				@endif
				{{$receipt_details->repair_brand}}<br>
	        @endif
	        
            <!-- Device Lable -->
	        @if(!empty($receipt_details->device_label) || !empty($receipt_details->repair_device))
				@if(!empty($receipt_details->device_label))
					<span class="pull-left">
						<strong>{!! $receipt_details->device_label !!}</strong>
					</span>
				@endif
				{{$receipt_details->repair_device}}<br>
	        @endif
	        
		    <!-- Model Lable -->    
			@if(!empty($receipt_details->model_no_label) || !empty($receipt_details->repair_model_no))
				@if(!empty($receipt_details->model_no_label))
					<span class="pull-left">
						<strong>{!! $receipt_details->model_no_label !!}</strong>
					</span>
				@endif
				{{$receipt_details->repair_model_no}} <br>
	        @endif
	        
            <!-- Serial Number Lable -->
			@if(!empty($receipt_details->serial_no_label) || !empty($receipt_details->repair_serial_no))
				@if(!empty($receipt_details->serial_no_label))
					<span class="pull-left">
						<strong>{!! $receipt_details->serial_no_label !!}</strong>
					</span>
				@endif
				{{$receipt_details->repair_serial_no}}<br>
	        @endif
	        
	        <!-- Repair Status Lable -->
			@if(!empty($receipt_details->repair_status_label) || !empty($receipt_details->repair_status))
				@if(!empty($receipt_details->repair_status_label))
					<span class="pull-left">
						<strong>{!! $receipt_details->repair_status_label !!}</strong>
					</span>
				@endif
				{{$receipt_details->repair_status}}<br>
	        @endif
	        
	        <!-- Repair Warranty Lable -->
	        @if(!empty($receipt_details->repair_warranty_label) || !empty($receipt_details->repair_warranty))
				@if(!empty($receipt_details->repair_warranty_label))
					<span class="pull-left">
						<strong>{!! $receipt_details->repair_warranty_label !!}</strong>
					</span>
				@endif
				{{$receipt_details->repair_warranty}}
				<br>
	        @endif
	        </p>
		</div>
	</div>
</div>       

</br>

@if(App::getLocale() == 'ar')

<!--- Invoice table -->
<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 50%; color: black !important;" class="left">
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> رقم الفاتورة </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{$receipt_details->invoice_no}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->invoice_no_prefix !!}</td>
    </tr>
  
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> التاريخ </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{$receipt_details->invoice_date}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;"> التاريخ </td>
    </tr>

    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> تاريخ الشحن </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">
        <!-- Display invoice date If there is no delivery date -->     
            @if(!empty($receipt_details->shipping_custom_field_1_value))
                {!!$receipt_details->shipping_custom_field_1_value ?? ''!!}
            @else
                {{$receipt_details->invoice_date}}
            @endif
        </td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">Delivery Date
        </td>
    </tr>
    

    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> اسم العميل </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->customer_info !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_label }}</td>
    </tr>
  
    @if(!empty($receipt_details->customer_tax_number))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;"> الرقم الضريبي </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_tax_number}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_tax_label }}</td>
    </tr>
    @endif
  
    @if(($receipt_details->customer_name !== 'Walk-In Customer'))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; font-size: 12px !important;">
		    	@if(!empty($receipt_details->customer_rp_label))
			    	<span style="text-align=left; font-size: 12px !important;"> نقاط المكافأة </span>
		    	@endif 
        </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; font-size: 12px !important;">
		        @if(!empty($receipt_details->customer_rp_label))
			   <span style="text-align=center">{{ $receipt_details->customer_total_rp }}</span>
		    	<td style="border: 1px solid #ffffff; text-align: right; padding: 1px; font-size: 12px !important;"><span style="text-align=right">{{ $receipt_details->customer_rp_label }}</span></td>
		    	@endif
        </td>
    </tr>
    @endif
  
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 2px; font-size: 12px !important;"> اسم البائع </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 2px; font-size: 12px !important;">{{ $receipt_details->sales_person }}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 2px; font-size: 12px !important;">{{ $receipt_details->sales_person_label }}</td>
    </tr>
</table>

@else

<!--- Invoice table -->
<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 50%; color: black !important;" class="left">
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->invoice_no_prefix !!}</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{$receipt_details->invoice_no}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">رقم الفاتورة</td>
    </tr>
  
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">{{$receipt_details->date_label}}</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{$receipt_details->invoice_date}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">التاريخ</td>
    </tr>

    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">Delivery Date</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">
        <!-- Display invoice date If there is no delivery date -->     
            @if(!empty($receipt_details->shipping_custom_field_1_value))
                {!!$receipt_details->shipping_custom_field_1_value ?? ''!!}
            @else
                {{$receipt_details->invoice_date}}
            @endif
        </td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">تاريخ الشحن
        </td>
    </tr>
    

    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_label }}</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{!! $receipt_details->customer_info !!}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">اسم العميل</td>
    </tr>
  
    @if(!empty($receipt_details->customer_tax_number))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_tax_label }}</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:top; font-size: 12px !important;">{{ $receipt_details->customer_tax_number}}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:top; font-size: 12px !important;">الرقم الضريبي</td>
    </tr>
    @endif
  
    @if(($receipt_details->customer_name !== 'Walk-In Customer'))
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; font-size: 12px !important;">
		    	@if(!empty($receipt_details->customer_rp_label))
			    	<span style="text-align=left; font-size: 12px !important;">{{ $receipt_details->customer_rp_label }}</span>
		    	@endif 
        </td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; font-size: 12px !important;">
		        @if(!empty($receipt_details->customer_rp_label))
			   <span style="text-align=center">{{ $receipt_details->customer_total_rp }}</span>
		    	<td style="border: 1px solid #ffffff; text-align: right; padding: 1px; font-size: 12px !important;"><span style="text-align=right">نقاط المكافأة</span></td>
		    	@endif
        </td>
    </tr>
    @endif
  
    <tr style="background-color: #ffffff;">
        <td style="border: 1px solid #ffffff; text-align: left; padding: 2px; font-size: 12px !important;">{{ $receipt_details->sales_person_label }}</td>
        <td style="border: 1px solid #ffffff; text-align: center; padding: 2px; font-size: 12px !important;">{{ $receipt_details->sales_person }}</td>
        <td style="border: 1px solid #ffffff; text-align: right; padding: 2px; font-size: 12px !important;">اسم البائع</td>
    </tr>
</table>

@endif

<div class="row">
	@includeIf('sale_pos.receipts.partial.common_repair_invoice')
</div>

<!-- Item Sales Table -->
<style>
td.b {
  vertical-align: text-top;
}
</style>

<div class="row color-000000">
	<div class="col-xs-12">
		<br/>
		<table style="width:100%; border: 1px solid black; border-collapse: collapse">
			<thead style="style="width:100%; border: 1px solid black; border-collapse: collapse">
				<tr style="width:100%; border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important; font-size: 15px !important font-weight: bold;" class=>
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">#</td>
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center" width="50%">اسم الصنف<br>
						{!! $receipt_details->table_product_label !!}
					</td>
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">السعر<br>
						{!! $receipt_details->table_unit_price_label !!} <span class="small color-black"> <!-- ({{$receipt_details->currency['symbol']}})--></span>
					</td>
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">الكمية<br>{!! $receipt_details->table_qty_label !!}
					</td>
					
					 <td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">الخصم<br>
						{!! $receipt_details->line_discount_label !!}
					</td>

                     <td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">المبلغ <br>
						Amount <span class="small color-black"><!--{{$receipt_details->currency['symbol']}}--></span>
					</td>

					@if(!empty($receipt_details->table_tax_headings))
						@foreach($receipt_details->table_tax_headings as $tax_heading)
							<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">
								الضريبة<br> {{$tax_heading}} <span class="small color-black"> <!--({{$receipt_details->currency['symbol']}})--></span>
							</td>
							@php
								$totals[$tax_heading] = 0;
							@endphp
						@endforeach
					@endif
					<td style="border: 1px solid black; border-collapse: collapse; background-color: #fdfae1 !important; color: black !important;" class="text-center">الاجمالي<br> 
						{!! $receipt_details->table_subtotal_label !!} <span class="center small color-black"> <!--({{$receipt_details->currency['symbol']}})--></span>
					</td>
				</tr>
			</thead>
			<tbody style="border: 1px solid black; border-collapse: collapse; color: black !important;">
				@foreach($receipt_details->lines as $line)
					<tr style="border: 1px solid black; border-collapse: collapse">
						<td style="border: 1px solid black; border-collapse: collapse;" valign="top" class="text-center">
							<span>&nbsp;</span>{{$loop->iteration}} <span>&nbsp;</span>
						</td>

                             @if(!empty($line['modifiers']))
			    @foreach($line['modifiers'] as $modifier)
						<td class="text-centre" style="word-break: break-word;" valign="top">
							@if(!empty($line['image']))
								<img src="{{$line['image']}}" alt="Image" width="50" style="float: left; margin-right: 8px;">
							@endif
                            {{$line['name']}}
                            <!-- {{$line['product_variation']}} --> 
                            <!-- I added the if and endif for the next line -->
                            @if(!empty($line['variation'])) - {{$line['variation']}} - 
                            @endif
                            <!-- I have added the above - and the following - and SKU-->
                            @if(!empty($line['brand']))- {{$line['brand']}}
                            @endif
                            @if(!empty($line['sub_sku'])) - SKU {{$line['sub_sku']}} <br> {{$modifier['name']}} {{$modifier['variation']}}
                            @endif 
                            @if(!empty($line['sell_line_note']))
                            <!-- <br> --> -
                            <small class="text-muted"><i>
                            {{$line['sell_line_note']}}
                        	</i></small>
                            @endif
                            <!-- I added the dash after the next line-->
                            @if(!empty($line['lot_number'])) -  {{$line['lot_number_label']}}#:  {{$line['lot_number']}} 
                            @endif 
                            @if(!empty($line['product_expiry']))- {{$line['product_expiry_label']}}:  {{$line['product_expiry']}} 
                            @endif 

                            @if(!empty($line['warranty_name'])) <br><small>{{$line['warranty_name']}} </small>
                            @endif 
                            @if(!empty($line['warranty_exp_date'])) <small>- {{@format_date($line['warranty_exp_date'])}} </small>
                            @endif
                            @if(!empty($line['warranty_description'])) <small> {{$line['warranty_description'] ?? ''}}</small>
                            @endif
                        </td>
                            @endforeach
                            @else
                            <td class="text-centre" style="word-break: break-word;" valign="top">
							@if(!empty($line['image']))
								<img src="{{$line['image']}}" alt="Image" width="50" style="float: left; margin-right: 8px;">
							@endif
                            {{$line['name']}}
                            <!-- {{$line['product_variation']}} --> 
                            <!-- I added the if and endif for the next line -->
                            @if(!empty($line['variation'])) - {{$line['variation']}} - 
                            @endif
                            <!-- I have added the above - and the following - and SKU-->
                            @if(!empty($line['brand']))- {{$line['brand']}}
                            @endif
                            @if(!empty($line['sub_sku'])) - SKU {{$line['sub_sku']}} 
                            @endif 
                            @if(!empty($line['sell_line_note']))
                            <!-- <br> --> -
                            <small class="text-muted"><i>
                            {{$line['sell_line_note']}}
                        	</i></small>
                            @endif
                            <!-- I added the dash after the next line-->
                            @if(!empty($line['lot_number'])) -  {{$line['lot_number_label']}}#:  {{$line['lot_number']}} 
                            @endif 
                            @if(!empty($line['product_expiry']))- {{$line['product_expiry_label']}}:  {{$line['product_expiry']}} 
                            @endif 

                            @if(!empty($line['warranty_name'])) <br><small>{{$line['warranty_name']}} </small>
                            @endif 
                            @if(!empty($line['warranty_exp_date'])) <small>- {{@format_date($line['warranty_exp_date'])}} </small>
                            @endif
                            @if(!empty($line['warranty_description'])) <small> {{$line['warranty_description'] ?? ''}}</small>
                            @endif
                        </td>
                           @endif

                         <br> {{ $mod_item_value }}

                         
                        @if(!empty($line['modifiers']))
			@foreach($line['modifiers'] as $modifier)

                      

                        <td style="border: 1px solid black; border-collapse: collapse;" class="text-right" valign="top">
							{{$line['unit_price_before_discount']}} </br>  {{$modifier['unit_price_exc_tax']}}


                                                       
						</td>
                        @endforeach
                        @else
                        <td style="border: 1px solid black; border-collapse: collapse;" class="text-right" valign="top">
							{{$line['unit_price_before_discount']}} </br>
						</td>
                        @endif
                          @if(!empty($line['modifiers']))
			@foreach($line['modifiers'] as $modifier)
						<td style="border: 1px solid black; border-collapse: collapse; margin-top: -8px;" class="text-center" valign="top">
							{{number_format($line['quantity'], 0)}} <br><small>{{$line['units']}}</small> <br> {{$modifier['quantity']}} {{$modifier['units']}}
						</td>

                          @endforeach
                          @else
                                                   <td style="border: 1px solid black; border-collapse: collapse; margin-top: -8px;" class="text-center" valign="top">
							{{number_format($line['quantity'], 0)}} <br><small>{{$line['units']}}</small> <br> 
						</td>
                          @endif
						<td style="border: 1px solid black; border-collapse: collapse;" class="text-right" valign="top">
							{{$line['line_discount']}}
						</td>

                          
                          
                        <td style="border: 1px solid black; border-collapse: collapse;" class="text-right" valign="top">
							<span class="display_currency" data-currency_symbol="false">
								{{$line['price_exc_tax']}}  
							</span>
							@php
								$totals['taxable_value'] += $line['price_exc_tax'];
							@endphp
						</td>
						@if(!empty($receipt_details->table_tax_headings))
						@foreach($receipt_details->table_tax_headings as $tax_heading)
							<td style="border: 1px solid black; border-collapse: collapse;" class="text-right word-wrap" valign="top">
								@if(!empty($line['group_tax_details']))
								
								@foreach($line['group_tax_details'] as $tax_detail)
									@if(strpos($tax_detail['name'], $tax_heading) !== FALSE)
										@php
											$totals[$tax_heading] += $tax_detail['calculated_tax'];
										@endphp
										<span class="display_currency" data-currency_symbol="false">
										{{number_format($tax_detail['calculated_tax'], 2)}}
										</span>
										<br/>
										<span class="small">
										{{number_format($tax_detail['amount'], 2)}}%
										</span>
									@endif
								@endforeach
								@else
									@if(strpos($line['tax_name'], $tax_heading) !== FALSE)
									@php
										$totals[$tax_heading] += ($line['tax_unformatted'] * $line['quantity_uf']);
									@endphp
									<span class="display_currency" data-currency_symbol="false">
									{{$line['tax_unformatted'] * $line['quantity_uf']}}
									</span>
									<br/>
									<span class="small">
										{{number_format($line['tax_percent'], 0)}}%
									</span>
									@else NA
									@endif
								@endif
							</td>
						@endforeach
						@endif
						<!-- @if(!empty($line->group_tax_details))
						@foreach($line->group_tax_details as $tax_detail)
							<td style="border: 1px solid black; border-collapse: collapse;" class="text-right" valign="top">
								{{$line['line_discount']}}
							</td>
						@endforeach
						@endif -->

                                                   @if(!empty($line['modifiers']))
			                          @foreach($line['modifiers'] as $modifier)
						<td style="border: 1px solid black; border-collapse: collapse;" class="text-right" valign="top">
							{{$line['line_total']}} <br> {{$modifier['line_total']}}
						</td>
                                                    @endforeach
                                                    @else
                                                   <td style="border: 1px solid black; border-collapse: collapse;" class="text-right" valign="top">
							{{$line['line_total']}}
						</td>
                                                   @endif
					</tr>
					{{--  @if(!empty($line['modifiers']))
						@foreach($line['modifiers'] as $modifier)
							<tr>
								<td style="border: 1px solid black; border-collapse: collapse;" class="text-center">
									&nbsp;
								</td>
								<td>
		                            {{$modifier['name']}} {{$modifier['variation']}} 
		                            @if(!empty($modifier['sub_sku'])), {{$modifier['sub_sku']}} @endif 
		                            @if(!empty($modifier['sell_line_note']))({{$modifier['sell_line_note']}}) @endif 
		                        </td>
                                <td style="border: 1px solid black; border-collapse: collapse;" class="text-right">
									{{$modifier['quantity']}} {{$modifier['units']}}
								</td>
								<td class="text-right">
									&nbsp;
								</td>
								<td class="text-center">
									&nbsp;
								</td>
								<td class="text-center">
									&nbsp;
								</td>
								<td class="text-center">
									{{$modifier['unit_price_exc_tax']}}
								</td>
								<td style="border: 1px solid black; border-collapse: collapse;" class="text-right">
									{{$modifier['line_total']}}
								</td>
							</tr>
						@endforeach
					@endif --}}

                                     
				@endforeach
				@php
					$lines = count($receipt_details->lines);
				@endphp
				@for ($i = $lines; $i < 5; $i++)
    				<tr>
    				<!--<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp;</td>
    					<td>&nbsp;</td> -->

    					@if(!empty($receipt_details->table_tax_headings))
						@foreach($receipt_details->table_tax_headings as $tax_heading)
						<!--	<td>&nbsp;</td> -->
						@endforeach
						@endif
    				</tr>
				@endfor
				<tr>
					@php
						$colspan = 2;
					@endphp

					<th colspan="{{$colspan}}" class="text-right" 
						style="background-color: #fdfae1 !important;">
						Total
					</th>
                    <th style="border: 1px solid black; border-collapse: collapse;" class="text-right" style="background-color: #fdfae1 !important;">
						<span class="display_currency" data-currency_symbol="false">--</span>
					</th>

                    <th style="border: 1px solid black; border-collapse: collapse;" class="text-right" style="background-color: #fdfae1 !important;">
						<span class="display_currency" data-currency_symbol="false">
							{{number_format($receipt_details->total_quantity, 2)}}
						</span>
					</th>
                    <th style="border: 1px solid black; border-collapse: collapse;" class="text-right" style="background-color: #fdfae1 !important;">
						<span class="display_currency" data-currency_symbol="false">{{$receipt_details->total_line_discount}}
						</span>
					</th>
                    <th style="border: 1px solid black; border-collapse: collapse;" class="text-right" style="background-color: #fdfae1 !important;">
						<span>{{number_format($totals['taxable_value'], 2)}}</span>
					</th>

					<!-- <td>&nbsp;</td> -->

					@if(!empty($receipt_details->table_tax_headings))
					@foreach($receipt_details->table_tax_headings as $tax_heading)
						<th style="border: 1px solid black; border-collapse: collapse;" class="text-right" style="background-color: #fdfae1 !important;">
							<span class="display_currency" data-currency_symbol="false">
						          {{number_format($totals[$tax_heading], 2)}}
							</span>
						</th>
					@endforeach
					@endif

					<th style="border: 1px solid black; border-collapse: collapse;" class="text-right" style="background-color: #fdfae1 !important;">
						<span class="display_currency" data-currency_symbol="false">
							 {{number_format($receipt_details->subtotal_unformatted, 2)}}
						</span>
					</th>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@if(App::getLocale() == 'ar')
<div class="row invoice-info color-000000" style="page-break-inside: avoid !important">
	<div class="col-md-6 invoice-col width-50">
		<table class="table table-slim">
			@if(!empty($receipt_details->payments))<br>
			        <tr style="color: black !important;">
					    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; font-weight:bold;"> طريقة الدفع </td>
					    <!-- <td style="border: 1px solid #ffffff;"></td> -->
					    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; font-weight:bold;">Payment Method</td>
				    </tr>
			    @foreach($receipt_details->payments as $payment)
					<tr style="color: black !important;">
						<td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">{{$payment['method']}}</td>
						<td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false">{{$payment['amount']}}</span></td>
					    <!-- <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">{{$payment['date']}}</td> -->
					</tr>
				@endforeach
                @if(!empty($receipt_details->total_due))
                    
                    <tr style="background-color: #fdfae1; border-top-style: solid; color: black !important;"">
                        <td style="text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; font-weight:bold;"> Partial Payment</td>
                        <!-- <td></td> -->
                        <th style="text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;tant; font-weight:bold;"> دفـع جــزئـي  </td>
                  </tr>
                @endif
			@endif
        </table>

		<!--
		<b class="pull-left">@lang('lang_v1.authorized_signatory')</b>
		-->
</div>
<div class="col-md-6 invoice-col width-50">
       <br>

<!--- Invoice table -->
<table class="table-no-side-cell-border table-no-top-cell-border width-100 table-slim">
			<tbody>

            <!-- Quantity of Items -->
				@if(!empty($receipt_details->total_quantity_label))
                  <tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي الكمية</td>                  
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;">{{number_format($receipt_details->total_quantity, 0)}}<small>&nbsp{{$line['units']}}</small></td>
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Total Qty:</td>                   
                  </tr>
				@endif
				
			<!-- Subtotal Amount -->
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي المبلغ</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;">{{number_format($totals['taxable_value'], 2)}}</td>
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Total Amount:</td>
                </tr>

			<!-- Invoice Tax -->
				@if( !empty($receipt_details->tax) )
					<tr style="background-color: #ffffff; color: black !important;">
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي ضريبة الفاتورة</td>
                        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><small>{{number_format($receipt_details->tax), 2}}</td>
                        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Total Inv. VAT:  (+)</td>
                    </tr>
			    @endif 
 
            <!-- Items Tax -->
                <tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي الضرية</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{number_format($totals[$tax_heading], 2)}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Total VAT:  (+)</td>
                </tr>

            <!-- Invoice Subtotal -->
           		<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي الفاتورة</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{number_format($receipt_details->subtotal_unformatted, 2)}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">{!! $receipt_details->total_label !!}</td>
                </tr>

            <!-- Items Discount -->
                @if( !empty($receipt_details->total_line_discount) )
					<tr style="background-color: #ffffff; color: black !important;">
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:خصم الاصناف</td>
						<td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;">{{$receipt_details->total_line_discount}}
						</td>
						<td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">
							{!! $receipt_details->line_discount_label !!}: (-)
						</td>
					</tr>
				@endif

            <!-- Total Invoice Discount -->
            @if( !empty($receipt_details->discount) )
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:خصم الفاتورة</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->discount}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Inv. Disc.:  (-)</td>
                </tr>
            @endif

            <!-- Shipping Charges -->
            @if(!empty($receipt_details->shipping_charges))
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:رسوم الشحن</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->shipping_charges}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Shipping Chargers:  (+)</td>
                </tr>
			@endif

            <!-- Packing Charges -->
            @if(!empty($receipt_details->packing_charge))
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:رسوم التعبئة</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->packing_charge}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Packing Chargers:  (+)</td>
                </tr>
			@endif

            <!-- Rewards Points Discount -->
            @if( !empty($receipt_details->reward_point_label) )
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:خصم نقاط المكافاءة</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->reward_point_amount}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Rewards Disc.:  (-)</td>
                </tr>
			@endif

            <!-- Invoice Total -->
           		<tr style="background-color: #fdfae1;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">:صافي الفاتورة</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->total}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">{!! $receipt_details->total_label !!}</td>
                </tr>
               {{-- <tr>
				    <td colspan="5" style="width:100%; background-color: #fdfae1; text-align: right; vertical-align:middle; font-size: 10px; color: black !important;">({{ucwords(trans($receipt_details->total_in_words))}} Saudi Riyals)</td>
                </tr> --}}

            <!-- Paid Amount -->
                <tr style="background-color: #fdfae1;">
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; font-weight:bold; color: black !important;">:إجمالي المدفوع</td>
                    @if(!empty($receipt_details->total_paid))
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->total_paid}}</span></td>
                    @else
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>0</span></td>
                    @endif
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"> {!! $receipt_details->total_paid_label !!}</td>
              </tr>

            <!-- This Invoice Total Due -->
                @if(!empty($receipt_details->total_due))
                    <tr style="background-color: #fdfae1;">
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 14px !important; color: black !important; font-weight:bold;">:المبلغ المتبقي</td>
                        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->total_due}}</span></td>
                        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">{!! $receipt_details->total_due_label !!}</td>
                  </tr>
                @endif

            <!-- This Invoice Due Date -->
                <!--@if(!empty($receipt_details->due_date_label))
                    <tr style="background-color: #fdfae1;">
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">:تاريخ الاستحقاق</td>
                        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>
					    	{{$receipt_details->due_date}}</td>
                        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">{{$receipt_details->due_date_label}} </td>
                  </tr>
                @endif-->

            <!-- Total Balance All Due -->
                @if(!empty($receipt_details->all_due))
                    <tr style="background-color: #fdfae1;">
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">:الرصيد المتبقي</td>
                        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>
                            {{$receipt_details->all_due}}</td>
                        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"> {!! $receipt_details->all_bal_label !!}</td>
                  </tr>
                @endif

            </tbody>
        </table>
	</div>
</div>

@else

<div class="row invoice-info color-000000" style="page-break-inside: avoid !important">
	<div class="col-md-6 invoice-col width-50">
		<table class="table table-slim">
			@if(!empty($receipt_details->payments))<br>
			        <tr style="color: black !important;">
					    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; font-weight:bold;">Payment Method</td>
					    <!-- <td style="border: 1px solid #ffffff;"></td> -->
					    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; font-weight:bold;">طريقة الدفع</td>
				    </tr>
			    @foreach($receipt_details->payments as $payment)
					<tr style="color: black !important;">
						<td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">{{$payment['method']}}</td>
						<td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false">{{$payment['amount']}}</span></td>
					    <!-- <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">{{$payment['date']}}</td> -->
					</tr>
				@endforeach
                @if(!empty($receipt_details->total_due))
                    
                    <tr style="background-color: #fdfae1; border-top-style: solid; color: black !important;"">
                        <td style="text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; font-weight:bold;"> Partial Payment</td>
                        <!-- <td></td> -->
                        <th style="text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;tant; font-weight:bold;"> دفـع جــزئـي  </td>
                  </tr>
                @endif
			@endif
        </table>

		<!--
		<b class="pull-left">@lang('lang_v1.authorized_signatory')</b>
		-->
</div>
<div class="col-md-6 invoice-col width-50">
       <br>

<!--- Invoice table -->
<table class="table-no-side-cell-border table-no-top-cell-border width-100 table-slim">
			<tbody>

            <!-- Quantity of Items -->
				@if(!empty($receipt_details->total_quantity_label))
                  <tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Total Qty:</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;">{{number_format($receipt_details->total_quantity, 0)}}<small>&nbsp{{$line['units']}}</small></td>
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي الكمية</td>
                  </tr>
				@endif
				
			<!-- Subtotal Amount -->
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Total Amount:</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;">{{number_format($totals['taxable_value'], 2)}}</td>
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي الفاتورة</td>
                </tr>

			<!-- Invoice Tax -->
				@if( !empty($receipt_details->tax) )
					<tr style="background-color: #ffffff; color: black !important;">
                        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Total Inv. VAT:  (+)</td>
                        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><small>{{number_format($receipt_details->tax), 2}}</td>
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي ضرية الفاتورة</td>
                    </tr>
			    @endif 
 
            <!-- Items Tax -->
                <tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Total VAT:  (+)</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{number_format($totals[$tax_heading], 2)}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي الضريبة</td>
                </tr>

            <!-- Invoice Subtotal -->
           		<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">{!! $receipt_details->total_label !!}</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{number_format($receipt_details->subtotal_unformatted, 2)}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:إجمالي الفاتورة</td>
                </tr>
                
            <!-- Items Discount -->
                @if( !empty($receipt_details->total_line_discount) )
					<tr style="background-color: #ffffff; color: black !important;">
						<td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">
							{!! $receipt_details->line_discount_label !!}: (-)
						</td>

						<td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->total_line_discount}}
						</td>
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:خصم الاصناف</td>
					</tr>
				@endif
         
            <!-- Total Invoice Discount -->
            @if( !empty($receipt_details->discount) )
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Inv. Disc.:  (-)</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->discount}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:خصم الفاتورة</td>
                </tr>
            @endif

            <!-- Shipping Charges -->
            @if(!empty($receipt_details->shipping_charges))
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Shipping Chargers:  (+)</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->shipping_charges}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:رسوم الشحن</td>
                </tr>
			@endif

            <!-- Packing Charges -->
            @if(!empty($receipt_details->packing_charge))
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Packing Chargers:  (+)</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->packing_charge}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:رسوم التعبئة</td>
                </tr>
			@endif

            <!-- Rewards Points Discount -->
            @if( !empty($receipt_details->reward_point_label) )
				<tr style="background-color: #ffffff; color: black !important;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important;">Rewards Disc.:  (-)</td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->reward_point_amount}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important;">:خصم نقاط المكافاءة</td>
                </tr>
			@endif

            <!-- Invoice Total -->
           		<tr style="background-color: #fdfae1;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">{!! $receipt_details->total_label !!}
                    </td>
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->total}}</span></td>
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">:صافي الفاتورة</td>
                </tr>
                <tr>
				    <td colspan="5" style="width:100%; background-color: #fdfae1; text-align: right; vertical-align:middle; font-size: 10px; color: black !important;">({{ucwords(trans($receipt_details->total_in_words))}} Saudi Riyals)</td>
                </tr>

            <!-- Paid Amount -->
                <tr style="background-color: #fdfae1;">
                    <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; font-weight:bold; color: black !important;">{!! $receipt_details->total_paid_label !!}</td>
                    @if(!empty($receipt_details->total_paid))
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->total_paid}}</span></td>
                    @else
                    <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>0</span></td>
                    @endif
                    <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">:إجمالي المدفوع</td>
              </tr>

            <!-- This Invoice Total Due -->
                @if(!empty($receipt_details->total_due))
                    <tr style="background-color: #fdfae1;">
                        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 14px !important; color: black !important; font-weight:bold;">{!! $receipt_details->total_due_label !!}</td>
                        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>{{$receipt_details->total_due}}</span></td>
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">:المبلغ المتبقي</td>
                  </tr>
                @endif

            <!-- This Invoice Due Date -->
                <!--@if(!empty($receipt_details->due_date_label))
                    <tr style="background-color: #fdfae1;">
                        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">{{$receipt_details->due_date_label}}</td>
                        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>
					    	{{$receipt_details->due_date}}</td>
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">:تاريخ الاستحقاق</td>
                  </tr>
                @endif-->

            <!-- Total Balance All Due -->
                @if(!empty($receipt_details->all_due))
                    <tr style="background-color: #fdfae1;">
                        <td style="border: 1px solid #ffffff; text-align: left; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">{!! $receipt_details->all_bal_label !!}</td>
                        <td style="border: 1px solid #ffffff; text-align: center; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;"><span class="display_currency" data-currency_symbol="false";>
                            {{$receipt_details->all_due}}</td>
                        <td style="border: 1px solid #ffffff; text-align: right; padding: 1px; vertical-align:middle; font-size: 12px !important; color: black !important; font-weight:bold;">:الرصيد المتبقي</td>
                  </tr>
                @endif

            </tbody>
        </table>
	</div>
</div>

@endif

<!-- Additional Notes -->
<div class="row color-000000">
	<div class="col-xs-12" "text-center">
		<br>
		<p>{!! nl2br($receipt_details->additional_notes) !!}</p>
	</div>
</div>

{{-- Barcode & QRCode --}}
<!-- <div class="row">
	@if($receipt_details->show_barcode || $receipt_details->show_qr_code)
		<div class="@if(!empty($receipt_details->footer_text)) col-xs-4 @else col-xs-12 @endif text-center">
			@if($receipt_details->show_barcode)
				{{-- Barcode --}}
				<img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">
			@endif
			
			@if($receipt_details->show_qr_code && !empty($receipt_details->qr_code_details))
			@php
				$qr_code_text = implode(', ', $receipt_details->qr_code_details);
			@endphp
				<img class="center-block mt-5" src="data:image/png;base64,{{DNS2D::getBarcodePNG($qr_code_text, 'QRCODE', 3, 3, [39, 48, 54])}}">
			@endif
		</div>
	@endif
</div>  -->

{{-- Barcode & QRCode --}}
<div class="row">
		<div class="col-xs-12">
			@if($receipt_details->show_barcode || $receipt_details->show_qr_code)
		
			@if($receipt_details->show_barcode)
				{{-- Barcode --}}
				<img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">
			@endif
                         </br>
			
			@if($receipt_details->show_qr_code && !empty($receipt_details->qr_code_details))
			@php
				$qr_code_text = implode(', ', $receipt_details->qr_code_details);
			@endphp
				<img class="center-block mt-5" src="data:image/png;base64,{{DNS2D::getBarcodePNG($qr_code_text, 'QRCODE', 4, 4, [39, 48, 54])}}">
			@endif
		
	@endif
		</div>
</div>

<!-- Old Barcode Code
{{-- Barcode --}}
@if($receipt_details->show_barcode)
<br>
<div class="row">
		<div class="col-xs-12">
			<img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 1,40,array(39, 48, 54), true)}}">
		</div>
</div>
@endif
-->

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