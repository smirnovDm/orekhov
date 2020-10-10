<template>
    <div class="row">
        <div class="col-sm-12" style="text-align: center; padding: 10px 0 20px 0; font-size: 20px;color:red;">
            Стоимость поездки от 35 грн
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div style="padding-bottom: 5px">Выбрать пункт посадки:</div>
                <multiselect
                    :options="options"
                    track-by="id"
                    label="name"
                    name="city_id"
                    :searchable="true"
                    selectLabel="Нажмите что бы выбрать"
                    deselectLabel="Нажмите что бы удалить"
                    selectedLabel="Выбрано"
                    placeholder="Выбрать направление"
                ></multiselect>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div style="padding-bottom: 5px">Выбрать пункт высадки:</div>
                <multiselect
                    :options="options"
                    track-by="id"
                    label="name"
                    name="city_id"
                    :searchable="true"
                    selectLabel="Нажмите что бы выбрать"
                    deselectLabel="Нажмите что бы удалить"
                    selectedLabel="Выбрано"
                    placeholder="Выбрать направление"
                ></multiselect>
            </div>
        </div>
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
    import Multiselect from 'vue-multiselect'

    export default {
        name: "form-special",
        components: {Multiselect},
        data() {
            return {
                options: ['list', 'of', 'options'],
            };
        },
    }
</script>

<style scoped>

</style>
