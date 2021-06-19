<div class="master-bar btn-primary col">
    <button
        class="calculator btn font-weight-bold text-white"
        onclick="calculator()">
        <i class="fa fa-calculator"></i><span class="text-bar">Рассчитать цену</span></button>
</div>

<div class="calc-menu" id="calc-menu">
    <button type="submit" class="btn-close btn-close-white" aria-label="Close" onclick="closeAll()"></button>
    <div class="set-category">
        <h3 class="text-white text-center">Рассчет стоимости</h3>
        <hr>
        <h4>Выберите категорию услуг:</h4>
        @foreach($categories as $category)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault"
                       id="{{ $category['id'] }}" value="{{ $category['id'] }}" required>
                <label class="form-check-label" for="{{ $category['id'] }}">{{ $category->title }}
                </label>
            </div>
        @endforeach
        <label for="width" class="form-label">Размер участка:</label>
        <div class="input-group mb-2">
            <input type="number" class="form-control" id="width" step="any">
            <button class="form-control" id="units" disabled>сотка</button>
        </div>

        <input type="submit"
               class="btn btn-warning btn-hover-secondary font-weight-bold"
               value="Далее"
               id="btnOk"
               onclick="checkCategory()"
               onchange="loadServices()">
    </div>

    <div class="set-services">
        <h4>Выберите необходимые услуги:</h4>
        <hr>
        <ul id="all-services">

        </ul>
        <input type="submit"
               class="btn btn-warning btn-hover-secondary font-weight-bold"
               value="Назад"
               id="back"
               onclick="backCategories()">
        <input type="submit"
               class="btn btn-warning btn-hover-secondary font-weight-bold"
               value="Далее"
               id="back"
               onclick="next()">
    </div>

    <div class="price-block">
        <h3 class="text-white">Итоговая стоимость: <span class="price-end"></span></h3>
        <hr>
        <p class="note mb-2">Данная стоимость не является точной. Для уточнения цены необходимо связаться с менеджером
                компании.</p>
        <input type="submit"
               class="btn btn-warning btn-hover-secondary font-weight-bold"
               value="Назад"
               id="back"
               onclick="backServices()">
    </div>

</div>

