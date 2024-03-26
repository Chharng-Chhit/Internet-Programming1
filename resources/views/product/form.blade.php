<x-layout>
    <form action="/product/store" method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: 0 auto; padding: 30px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
        @csrf
        <h1 style="text-align: center; margin-bottom: 30px; font-size: 24px; color: #333;">Add New Product</h1>
        <div style="margin-bottom: 20px;">
            <label for="name" class="form-label" style="display: block; margin-bottom: 5px; font-weight: bold;">Name</label>
            <input type="text" class="form-control" id="name" name="name" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div style="display: flex; gap: 20px; margin-bottom: 20px;">
            <div style="flex: 1;">
                <label for="pricing" class="form-label" style="display: block; margin-bottom: 5px; font-weight: bold;">Price</label>
                <input type="number" class="form-control" id="pricing" name="pricing" min="1" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
            <div style="flex: 1;">
                <label for="promotion" class="form-label" style="display: block; margin-bottom: 5px; font-weight: bold;">Promotion</label>
                <input type="number" class="form-control" id="promotion" name="promotion" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <label class="form-label" style="display: block; margin-bottom: 5px; font-weight: bold;">Category</label>
            <select class="form-select" id="category" name="category" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div style="margin-bottom: 20px;">
            <label for="image" class="form-label" style="display: block; margin-bottom: 5px; font-weight: bold;">Image</label>
            <input type="file" class="form-control" id="image" name="image" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 20px;">
            <label class="form-label" style="display: block; margin-bottom: 5px; font-weight: bold;">Description</label>
            <textarea id="description" name="description" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
        </div>
        <div style="display: flex; justify-content: center;">
            <a href="{{route("home")}}" style="text-decoration: none; padding: 10px 20px; background-color: #999; color: #fff; border-radius: 5px; margin-right: 5px">Cancel</a>
            <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Create</button>
        </div>
    </form>
</x-layout>
