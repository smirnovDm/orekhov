<template>
    <div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Укажите Ваше имя">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="number" id="phone" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone'" placeholder="Укажите Ваш телефон">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "form-default"
}
</script>

