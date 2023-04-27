@extends('layouts.app') {{-- TODO change layout path if is different --}}
@section('content')   

<form id="myForm"  class="ajax_form" name="myForm" novalidate="">                           
    <label>myFirstInput</label>
    <input type="text" class="form-control" id="myFirstInput" name="myFirstInput"  placeholder="Enter myFirstInput" value="">                       
                        
    <label>mySecondInput</label>
    <input type="text" class="form-control" id="mySecondInput" name="mySecondInput"  placeholder="Enter mySecondInput" value="">                           
    <button type="button" id="myAction" value="add">myAction</button>
</form>  
                    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script defer>
    $(document).ready(function($){
        //TODO map with your button id
        $("#myAction").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            //TODO map form name
            var formData = {
                myFirstInput: $('#myFirstInput').val(),
                mySecondInput: $('#mySecondInput').val(),
            };
            var ajaxurl = '/'; //TODO your route name
            var type = "POST";
            $.ajax({
                type: type,
                url: ajaxurl,
                data: formData,
                dataType: 'json',
                success: function (data) {
                console.log(data)
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    });
</script>
@endsection