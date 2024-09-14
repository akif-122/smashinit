@extends('admin.layouts.master')

@section('styles')
 <!-- This Page CSS -->
 <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
@endsection

@section('content')


    <form action="{{ route('admin.item.update') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row mt-3">
            <h3>Item Information</h3>
            <div class="col-6 form-group">
                <label for="Name"> Item Category:</label>
                <select name="category_id" class="form-control form-control-lg" id="">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$item->category_id == $category->id ? 'selected': ''}} >{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="Name"> Title:</label>
                <input type="text" id="title" name="title" class="form-control form-control-lg" placeholder="Item Title" value="{{ old('title',$item->title) }}" required>
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-6 form-group mt-3">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" class="form-control form-control-lg" placeholder="Item Price" value="{{ old('price',$item->price) }}" required>
                @error('price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="col-6 form-group mt-3">
                <label for="image">Item Image:</label>
                <input type="file" class="form-control" name="image" id="image">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            @php $category_extras = \App\Models\ItemExtra::where('item_id',$item->id)->where('is_category',1)->orderBy('section_order','asc')->get(); @endphp
            @if($category_extras)
                @foreach($category_extras as $ce)
                    <div class="row mt-5" id="category_as_extra_section">

                        <div class="col-4 form-group mt-3">
                            <label for="Name"> Order Of Showing:</label>
                            <input type="text" class="form-control form-control-lg" name="category_as_extra_order[]" value="{{$ce->section_order}}">
                        </div>
                        <div class="col-4 form-group mt-3">
                            <label for="Name"> Item Category:</label>
                            <select name="category_as_extra[]" class="form-control form-control-lg" id="">
                                <option value="">Select Category as Extra</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$ce->category_id == $category->id ? 'selected': ''}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4 form-group mt-3">
                            <label for="Name">Extra Type:</label>
                            <select name="extra_type[]" class="form-control form-control-lg" id="">

                                <option value="1" {{$ce->type == 1 ? 'selected' : ''}}>Radio: Select only one extra from list</option>
                                <option value="2" {{$ce->type == 2 ? 'selected' : ''}}>CheckBox: Select multiple extras from list</option>
                            </select>
                        </div>
                    </div>
                @endforeach
            @endif
            @php $manual_extras = \App\Models\ItemExtra::where('item_id',$item->id)->where('is_category',0)->orderBy('section_order','asc')->get(); @endphp
            @if($manual_extras)
                @foreach($manual_extras as $me)
            <div class="row mt-5" id="manual_extra_section" style="border: 1px solid #efefef;border-radius: 10px;padding: 10px;margin: 0;">
                <div class="row mb-3" id="manual_extra_section_row_0">

                    <div class="col-2 form-group mt-3">
                        <label for="Name"> Extra Section Order:</label>
                        <input type="text" class="form-control form-control-lg" name="manual_extra_section_order[]" value="{{$me->section_order}}">
                    </div>
                    <div class="col-6 form-group mt-3">
                        <label for="Name"> Extra Section Title:</label>
                        <input type="text" class="form-control form-control-lg" name="manual_extra_section_title[]" value="{{$me->title}}">
                    </div>
                    <div class="col-4 form-group mt-3">
                        <label for="Name">Extra Type:</label>
                        <select name="manual_extra_type[]" class="form-control form-control-lg" id="">
                            <option value="1" {{$me->type == 1 ? 'selected' : ''}}>Radio: Select only one extra from list</option>
                            <option value="2" {{$me->type == 2 ? 'selected' : ''}}>CheckBox: Select multiple extras from list</option>
                        </select>
                    </div>
                    @php $count = 0; @endphp
                    @foreach($me->extra_details as $ed)
                    <div class="row" id="item_row_0">
                        <input type="hidden" class="detail_hidden" name="manual_extra_details_count[0][]" value="{{$count++}}">
                        <div class="col-3 form-group mt-3">
                            <label for="Name">Extra Item Title:</label>
                            <input type="text" class="form-control form-control-lg" name="manual_extra_title[0][]" value="{{$ed->title}}">
                        </div>
                        <div class="col-3 form-group mt-3">
                            <label for="Name">Extra Item Price:</label>
                            <input type="text" class="form-control form-control-lg" name="manual_extra_price[0][]" value="{{$ed->price}}">
                        </div>
                        <div class="col-4 form-group mt-3">
                            <label for="Name">Extra Item Image:</label>
                            <input type="file" class="form-control form-control-lg" name="manual_extra_image[0][]" value="">
                        </div>
                        <div class="col-2 form-group mt-3" style="padding-top: 25px;">
                            <button type="button" class="btn btn-lg btn-danger" onclick="delete_item_row(0,0)">Delete</button>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="form-group mt-3 col-6">
                    <button type="button" class="btn btn-sm btn-success" onclick="add_new_extra_item(0)">Add new extra item</button>
                </div>
            </div>
            @endforeach
            @endif


            <div class="col-12 mt-3 text-center">
                <button class="btn btn-success" type="button" onclick="add_separate_extra()">Add Separate Extras</button>
                <button class="btn btn-success" type="button" onclick="add_category_as_extra()">Use Category As Extras</button>
            </div>


            <div class="col-12 mt-5">
                <label for="description">Item Description:</label>
                <textarea name="description" id="description" class="summernote">{{ old('description',$item->description) }}</textarea>
                @error('productDescription')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row mt-5">
            <button type="submit" class="btn btn-success">Save Item Details</button>
        </div>
    </form>



@endsection

@section('scripts')
<script src="{{asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/forms/select2/select2.init.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
    $(document).ready(function () {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

    });
</script>

<script>
    var items_count = 0;
    var separate_extra = 0;
    var category_extra = 0;

    function add_separate_extra()
    {
        if(separate_extra === 0)
        {
            $('#manual_extra_section').prepend(
                `
                <input type="hidden" name="manual_extra_section_count[]" value="0">
                `
            );
            $('#manual_extra_section').show();

        }
        else
        {
            $('#manual_extra_section').append(`
            <div class="row mb-3" id="manual_extra_section_row_`+(separate_extra)+`">
                    <input type="hidden" name="manual_extra_section_count[]" value="`+(separate_extra)+`">
                    <div class="col-2 form-group mt-3">
                        <label for="Name"> Extra Section Order:</label>
                        <input type="text" class="form-control form-control-lg" name="manual_extra_section_order[]" value="">
                    </div>
                    <div class="col-6 form-group mt-3">
                        <label for="Name"> Extra Section Title:</label>
                        <input type="text" class="form-control form-control-lg" name="manual_extra_section_title[]" value="">
                    </div>
                    <div class="col-4 form-group mt-3">
                        <label for="Name">Extra Type:</label>
                        <select name="manual_extra_type[]" class="form-control form-control-lg" id="">
                            <option value="1">Radio: Select only one extra from list</option>
                            <option value="2">CheckBox: Select multiple extras from list</option>
                        </select>
                    </div>
                    <div class="row" id="item_row_`+(separate_extra)+`">
                        <input type="hidden" class="detail_hidden" name="manual_extra_details_count[`+(separate_extra)+`][]" value="0">
                        <div class="col-3 form-group mt-3">
                            <label for="Name">Extra Item Title:</label>
                            <input type="text" class="form-control form-control-lg" name="manual_extra_title[`+(separate_extra)+`][]" value="">
                        </div>
                        <div class="col-3 form-group mt-3">
                            <label for="Name">Extra Item Price:</label>
                            <input type="text" class="form-control form-control-lg" name="manual_extra_price[`+(separate_extra)+`][]" value="">
                        </div>
                        <div class="col-4 form-group mt-3">
                            <label for="Name">Extra Item Image:</label>
                            <input type="file" class="form-control form-control-lg" name="manual_extra_image[`+(separate_extra)+`][]" value="">
                        </div>
                        <div class="col-2 form-group mt-3" style="padding-top: 25px;">
                            <button type="button" class="btn btn-lg btn-danger" onclick="delete_item_row(`+(separate_extra)+`,0)">Delete</button>
                        </div>
                    </div>

                </div>
                <div class="form-group mt-3 col-6">
                    <button type="button" class="btn btn-sm btn-success" onclick="add_new_extra_item(`+(separate_extra)+`)">Add new extra item</button>
                </div>
                `);
        }
        separate_extra++;

    }
    function add_category_as_extra()
    {
        if(category_extra === 0)
        {
            $('#category_as_extra_section').show();
            $('#category_as_extra_section').prepend(`<input type="hidden" name="category_as_extra_count[]" value="0">`);
        }
        else
        {
            $('#category_as_extra_section').append(`
            <input type="hidden" name="category_as_extra_count[]" value="`+category_extra+`">
                <div class="col-4 form-group mt-3">
                    <label for="Name"> Order Of Showing:</label>
                    <input type="text" class="form-control form-control-lg" name="category_as_extra_order[]" value="">
                </div>
                <div class="col-4 form-group mt-3">
                    <label for="Name"> Item Category:</label>
                    <select name="category_as_extra[]" class="form-control form-control-lg" id="">
                        <option value="">Select Category as Extra</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4 form-group mt-3">
                    <label for="Name">Extra Type:</label>
                    <select name="extra_type[]" class="form-control form-control-lg" id="">
                        <option value="1">Radio: Select only one extra from list</option>
                        <option value="2">CheckBox: Select multiple extras from list</option>
                    </select>
                </div>
            `);
        }
        category_extra++;
    }
    function add_new_extra_item(row)
    {
        var hiddenInputValue = $('#manual_extra_section_row_' + row + ' input[type="hidden"].detail_hidden').length;


        $('#manual_extra_section_row_'+row).append(

            `
            <div class="row" id="item_row_`+(row)+`">
                <input type="hidden" class="detail_hidden" name="manual_extra_details_count[`+(row)+`][]" value="`+hiddenInputValue+`">
                <div class="col-3 form-group mt-3">
                    <label for="Name">Extra Item Title:</label>
                    <input type="text" class="form-control form-control-lg" name="manual_extra_title[`+(row)+`][]" value="">
                </div>
                <div class="col-3 form-group mt-3">
                    <label for="Name">Extra Item Price:</label>
                    <input type="text" class="form-control form-control-lg" name="manual_extra_price[`+(row)+`][]" value="">
                </div>
                <div class="col-4 form-group mt-3">
                    <label for="Name">Extra Item Image:</label>
                    <input type="file" class="form-control form-control-lg" name="manual_extra_image[`+(row)+`][]" value="">
                </div>
                <div class="col-2 form-group mt-3" style="padding-top: 25px;">
                    <button type="button" class="btn btn-lg btn-danger" onclick="delete_item_row(`+(row)+`,`+(row+1)+`)">Delete</button>
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
