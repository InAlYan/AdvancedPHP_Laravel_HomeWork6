<div class="add-books__form-wrapper">
    <form name="add-new-book" id="add-new-book" method="post" action="{{url('store-form')}}">
        "@csrf
        <div class="form-section">
            <label for="title">Название</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-section">
            <label for="author">Автор</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>

        <div class="form-section">
            <label for="year_of_release">Год выпуска</label>
            <input type="date" id="year_of_release" name="year_of_release" class="form-control">
        </div>

        <div class="form-section">
            <label for="number_of_pages">Количество страниц</label>
            <input type="number" id="number_of_pages" name="number_of_pages" class="form-control" min="0" max="99999">
        </div>

        <div class="form-section">
            <label for="genre">Choose genre:</label>
            <select name="genre" id="genre">
                <option value="fantasy">Fantasy</option>
                <option value="sci-fi">Sci-fi</option>
                <option value="mystery">Mystery</option>
                <option value="drama">Drama</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
