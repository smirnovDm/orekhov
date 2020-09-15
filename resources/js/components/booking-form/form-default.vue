<template>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid"
                       name="name"
                       id="name"
                       type="text"
                       onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Укажите Ваше имя'"
                       placeholder="Укажите Ваше имя">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid"
                       name="number"
                       id="phone"
                       type="number"
                       onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Укажите Ваш телефон'"
                       placeholder="Укажите Ваш телефон">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "form-default"
    }
</script>

