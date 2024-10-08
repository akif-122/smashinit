<div class="col-6 form-group mt-2">
    <label for="productSubCategory">Product Sub Category:</label>
    <select class="form-select mr-sm-2 form-control-lg" id="productSubCategory" name="productSubCategory">
        <option selected disabled>Choose...</option>
        @foreach($sub_categories as $sub_category)
            <option value="{{ $sub_category->id }}" {{ old('productSubCategory') == $sub_category->id ? 'selected' : '' }}>
                {{ $sub_category->title }}
            </option>
        @endforeach
    </select>
    @error('productSubCategory')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
