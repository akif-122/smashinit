@extends('admin.layouts.master')


@section('content')
@include('admin.includes.toasters')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0" style="display: inline-block;">Create Extra</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.extra.save')}}" method="post">
                    <div class="row" id="item_container">
                        <div class="col-12 form-group mt-3">
                            <label for="Name"> Extra Section Title:</label>
                            <input type="text" class="form-control form-control-lg" name="manual_extra_section_title[]" value="">
                        </div>
                        <div class="row" id="item_row_1">
                            <div class="col-3 form-group mt-3">
                                <label for="Name">Extra Item Title:</label>
                                <input type="text" class="form-control form-control-lg" name="manual_extra_title[]" value="">
                            </div>
                            <div class="col-3 form-group mt-3">
                                <label for="Name">Extra Item Price:</label>
                                <input type="text" class="form-control form-control-lg" name="manual_extra_price[]" value="">
                            </div>
                            <div class="col-4 form-group mt-3">
                                <label for="Name">Extra Item Image:</label>
                                <input type="file" class="form-control form-control-lg" name="manual_extra_image[]" value="">
                            </div>
                            <div class="col-2 form-group mt-3" style="padding-top: 25px;">
                                <button type="button" class="btn btn-lg btn-danger" onclick="delete_item_row(1)">Delete</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 col-6">
                        @csrf
                        <button type="button" class="btn btn-lg btn-success" onclick="add_new_extra_item()">Add new extra item</button>
                    </div>
                    <div class="form-group mt-3 col-12 text-center">
                        <button class="btn btn-lg btn-success">Save Extras Detail</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@include('admin.includes.index-scripts')
<script>
    var items_count = 1;
    function add_new_extra_item()
    {
        items_count++;
        $('#item_container').append(
            `<div class="row" id="item_row_`+items_count+`">
                <div class="col-3 form-group mt-3">
                    <label for="Name">Extra Item Title:</label>
                    <input type="text" class="form-control form-control-lg" name="manual_extra_title[]" value="">
                </div>
                <div class="col-3 form-group mt-3">
                    <label for="Name">Extra Item Price:</label>
                    <input type="text" class="form-control form-control-lg" name="manual_extra_price[]" value="">
                </div>
                <div class="col-4 form-group mt-3">
                    <label for="Name">Extra Item Image:</label>
                    <input type="file" class="form-control form-control-lg" name="manual_extra_image[]" value="">
                </div>
                <div class="col-2 form-group mt-3" style="padding-top: 25px;">
                    <button type="button" class="btn btn-lg btn-danger" onclick="delete_item_row(`+items_count+`)">Delete</button>
                </div>
            </div>`
        )
    }
    function delete_item_row(count)
    {
        $('#item_row_'+count).remove();
    }
</script>
@endsection
