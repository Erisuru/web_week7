<table border="0" cellpadding = "0" cellspacing = "0" 
style="width:780px; height:102px; background-image:url(images/topbanner.gif);">
	<tr style="height:32px;">
		<td >
			<table border="0" cellpadding="0" cellspacing="0"
			style = "width:780px; height:32px;">
				<tr>
					<td style="width:615px;"></td>
					<td style="width:55px; text-align: center;">
						<a href="#" class = "lang">VN</a>
					</td>
					<td style="width:62px; text-align: center;">
						<a href="#" class = "lang">EN</a>
					</td>
					<td style="width:48px; text-align: center;">
						<a href="#" class = "lang">CN</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr style="height:46px;">
		<td >
			
		</td>
	</tr>
	<tr style="height:24px;">
		<td >
			<table border="0" cellpadding="0" cellspacing="0"
			style="width: 780px; height: 24px;">
				<tr>
					<td style="width: 170px;" ></td>
					
					@foreach($categories as $key=>$value)
						<td style="{{$value->style}}">
							<a href="#" class="menu">{{$value->name}}</a></td>
					@endforeach

				</tr>
			</table>
		</td>
	</tr>
</table>