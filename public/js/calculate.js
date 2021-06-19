elem = document.querySelector('#calc-menu');

function calculator() {
    state = elem.style.display; //смотрим, включен ли сейчас элемент
    if (state == 'none') {
        elem.style.display = 'block';
    } //если скрыт, то раскрываем
    else {
        elem.style.display = 'none';
    } //иначе - скрываем
}

let setCategory = document.querySelector('.set-category');
let setServices = document.querySelector('.set-services');
let priceBlock = document.querySelector('.price-block');

const f = async (url) => {
    let options = {method: 'GET', headers: {}};

    options.headers['Content-type'] = 'application/json';

    const response = await fetch('/api' + url, options);

    let obj = null;
    try {
        obj = await response.json();
    } catch (e) {
    }

    return {response, data: obj}
}

async function checkCategory() {
    let check = document.querySelector('[type="radio"]:checked');
    let width = document.querySelector('[type="number"]');
    let units = document.querySelector('#units');
    // console.log(check);

    if (check != null && width != null) {
        let category = check.value;

        let services = await f('/filter/' + category);
        console.log(services);
        let data = services.data;
        console.log(data);
        let searchServices = document.querySelector('#all-services');
        searchServices.innerHTML = "";
        data.forEach(item => {
            // console.log(item.name);
            searchServices.innerHTML += `
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="${item.min_price}"
                           id="${item.id}" data-unit="${item.id_unit}" onchange="checkCalculate(this)">
                    <label class="form-check-label" for="${item.id}">
                        ${item.title}
                    </label>`;
        });
        let widthHome = width.value;
        let unit = units.value;
        localStorage.setItem('width', widthHome);
        localStorage.setItem('unit', unit);
        setCategory.style.display = 'none';
        setServices.style.display = 'block';

    } else {
        localStorage.setItem('category', 'Категория не выбрана...');
        alert('Вы не выбрали категорию услуг!');
    }
}


let width = localStorage.getItem('width');
let units = localStorage.getItem('units');

let sumPriceEl = document.querySelector(".price-end");


let widthHome = JSON.parse(width);
let unit = JSON.parse(units);

let sum = 0.0;
let price = 0;

function checkCalculate(e) {
    // console.log(`Код единицы измерения: ${e.dataset.unit}`);
    // console.log(widthHome);
    let temp = e.checked ? ~~e.value : -e.value;
    let unit = e.dataset.unit;

    let oftenUnits = document.querySelectorAll("[data-unit='3'], [data-unit='4']");
    for (let element of oftenUnits) {
        element.disabled = true;
        element.checked = false;
    }
    // console.log(oftenUnits);

    if (unit == 2) {
        price += (temp * 0.01) * widthHome;
    } else if (unit == 3 || unit == 4) {
        // price += temp;
        price += 0;
    } else {
        price += widthHome * temp;
    }
    console.log(`Итог: ${price}`);
    if (price < 0) {
        price = 0;
        sumPriceEl.innerHTML = `${price} руб.`;
    } else {
        sumPriceEl.innerHTML = `${price} руб.`;
    }
}

function backCategories() {
    setCategory.style.display = 'block';
    setServices.style.display = 'none';
}

function backServices() {
    setCategory.style.display = 'none';
    setServices.style.display = 'block';
    priceBlock.style.display = 'none';
}

function next() {
    setCategory.style.display = 'none';
    setServices.style.display = 'none';
    priceBlock.style.display = 'block';
}

function closeAll() {
    elem.style.display = 'none';
}
