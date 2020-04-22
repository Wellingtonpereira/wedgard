@extends('components.template')

@section('content')
    
    @include('elements.slider')
    @include('elements.comment')
    @include('elements.tools')
    @include('elements.services')
    @include('elements.phases')
    @include('elements.portfolio')
    @include('elements.contact') 

@endsection

@section('scripts')
<script>
    function dataModal( data, type ){
        axios.get('/project/'+data+'/'+type)
            .then(function (response) {

                let dt = response.data

                $(".modal-title").html('').html( dt.description_category + '  -  '+dt.title)

                let img =''
                $.each(dt.galery, function(i, v){
                    img += '<div class="col-md-12"><h6 class="text-center">'+v.title+'</h6><img src="'+v.img+'" alt="" class="img-fluid"><hr></div>'
                })

                $(".modal-images").html('').html( img )
                $(".modal-description").html('').html( dt.description)
                $(".modal-history").html('').html( dt.history)
            })
            .catch(function (error) {
            });
    }

    $(document).ready(function(){
        $('#modalPortfolio').on('hidden.bs.modal', function (e) {
            $(".modal-title").html('')
            $(".modal-images").html('')
            $(".modal-description").html('')
            $(".modal-history").html('')
        })
    })

</script>
@endsection