<template>
    <div>
        <div class="col-sm-6">
            <div class="form-group">
                Выбрать пункт посадки:
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
                Выбрать пункт высадки:
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
                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Укажите Ваше имя">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="number" id="phone" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone'" placeholder="Укажите Ваш телефон">
            </div>
        </div>
        <div class="col-sm-6">
            <p>Ебануть здесь временной барабан</p>
        </div>

    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
export default {
    name: "form-special",
    components: {Multiselect},
    data(){
      return {
          options: ['list', 'of', 'options'],
      };
    },
}
</script>

<style scoped>

</style>
