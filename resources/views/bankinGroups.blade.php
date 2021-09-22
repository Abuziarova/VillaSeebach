@extends('app')
@section('content')

<style type="text/css">
      <!--
      #kanaly div.selected {
         border: 2px solid #1E63A9;
         border-radius: 4px 4px 4px 4px;
         margin: 3px 3px -1px -1px;
      }
      #kanaly div {
         /*background-position: left top;
         background-repeat: no-repeat;
         border: 1px solid #DADADA;
         cursor: pointer;
         float: left;
         height: 88px;
         margin-right: 4px;
         margin-top: 4px;
         padding: 5px;
         position: relative;
         width: 127px;
         z-index: 4;*/
         background-color: white;
         background-position: center center;
         background-repeat: no-repeat;
         background-size: contain;
         border: 1px solid #b2b2b2;
         border-radius: 0.2em;
         cursor: pointer;
         display: inline-block;
         width: 120px;
         height:70px;
         margin-right: 4px;
         margin-top: 4px;
      }

      #kanaly div p.label {
         display:none;
      }
   </style>
    <div class="container">
        <div class="row  bankgroups">
            <div class="groups">
                <div class="card" style="align-items: center; padding: 25px 0px">
                <h1>Wybierz metode płatności:</h1>
                <div id="content" style="width: 80%"></div>
                </div>
            </div>

        </div>
    </div>
      <script type="text/javascript" src="https://secure.tpay.com/groups-10100.js"></script>
      <script type="application/javascript">

         function ShowChannels()
         {
         var str='<div id="kanaly" class="kanaly"><form action="/tpay/create" method="post" name="payment">'+
         '<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">'+
         '<input name="id" value="{{$id_order}}" type="hidden">'+
         '<input name="akceptuje_regulamin" value="1" type="hidden">';
         for(var i=0;i<tr_groups.length;i++)
         {
         var id = 'bank'+tr_groups[i][0];
         var width_style = '';
         var idi = 'i_'+id;
         if(tr_groups[i][0] == 40) width_style = 'width:270px'; else width_style = '';
         str +='<div id="'+id+'" onclick=\'document.getElementById("'+idi+'").checked=true;document.forms["payment"].submit();\' style="background-position:center;background-image:url('+tr_groups[i][3]+');'+width_style+'">';
         str +='<input id="'+idi+'" type="radio" value="'+tr_groups[i][0]+'" name="group" '; if (i==0) str +='checked="checked"  />'; else str += ' />';
         str += '<p class="label">'+
         '<label for="'+idi+'">'+tr_groups[i][1]+'</label>'+
         '</p>'+
         '</div>';
         }
         str+="</form></div>";
         document.getElementById('content').innerHTML=str;
         }

         window.onload = ShowChannels;

      </script>
@endsection