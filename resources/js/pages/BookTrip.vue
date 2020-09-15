<template>
    <main>
        <section class="pt-50">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-8">
                        <h2 class="contact-title">Заказать поездку</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post"
                              id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        Откуда
                                        <multiselect
                                            v-if="loadAll"
                                            v-model="selectedCityFrom"
                                            :options="loadAll"
                                            track-by="id"
                                            label="name"
                                            :searchable="true"
                                            selectLabel="Нажмите что бы выбрать"
                                            deselectLabel="Нажмите что бы удалить"
                                            selectedLabel="Выбрано"
                                            placeholder="Выбрать направление"
                                            @input="onChange"
                                        ></multiselect>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        Куда
                                        <multiselect
                                            v-if="loadAll"
                                            v-model="selectedCityTo"
                                            :options="loadAll"
                                            track-by="id"
                                            label="name"
                                            name="city_id"
                                            :searchable="true"
                                            selectLabel="Нажмите что бы выбрать"
                                            deselectLabel="Нажмите что бы удалить"
                                            selectedLabel="Выбрано"
                                            placeholder="Выбрать направление"
                                            @input="onChange"
                                        ></multiselect>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <booking-form :type="formType"></booking-form>
                                </div>
                                <div class="col-sm-6">
                                    Время отправки
                                    <smooth-picker
                                        ref="smoothPicker"
                                        :data="data"
                                        :change="dataChange"/>
                                </div>
                            </div>
                            <div class="form-group mt-3 text-center">
                                <button
                                    type="submit"
                                    class="button button-contactForm boxed-btn">
                                    Заказать
                                </button>
                            </div>
                        </form>
                    </div>
<!--                    <div class="col-lg-3 offset-lg-1">-->
<!--                        <div class="media contact-info">-->
<!--                            <span class="contact-info__icon"><i class="ti-home"></i></span>-->
<!--                            <div class="media-body">-->
<!--                                <h3>ул. Кольцевая 12, г. Орехов, Украина. 70500</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="media contact-info">-->
<!--                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>-->
<!--                            <div class="media-body">-->
<!--                                <h3>+38 (096) 238 44 58</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="media contact-info">-->
<!--                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>-->
<!--                            <div class="media-body">-->
<!--                                <h3>+38 (050) 269 27 37</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="media contact-info">-->
<!--                            <span class="contact-info__icon"><i class="ti-email"></i></span>-->
<!--                            <div class="media-body">-->
<!--                                <h3>express-orekhov@ukr.net</h3>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </section>
    </main>
</template>

<script>
    import Multiselect from 'vue-multiselect';
    import {mapGetters, mapActions} from 'vuex';

    export default {
        name: "BookTrip",
        components: {Multiselect},
        data() {
            const nowYear = (new Date()).getFullYear()
            const years = []
            for (let i = 1991; i <= nowYear; i++) {
                years.push(i)
            }

            return {
                value: null,
                options: ['list', 'of', 'options'],
                selectedCityFrom: "",
                selectedCityTo: "",
                formType: 'default',
                dataTime: {
                    'hour': 1,
                    'minute': 0
                },
                data: [
                    {
                        currentIndex: 0,
                        flex: 3,
                        list: ['1', '2', '3', '4'],
                        textAlign: 'center',
                        className: 'row-group'
                    },
                    {
                        currentIndex: 0,
                        flex: 3,
                        list: ['0', '30'],
                        textAlign: 'center',
                        className: 'row-group'
                    }
                ]
            }
        },
        computed: {
            ...mapGetters({
                loadAll: 'cities/all',
            })
        },
        created() {
            this.getCities();
        },
        methods: {
            ...mapActions({
                getCities: 'cities/load',
            }),
            dataChange(gIndex, iIndex) {
                if (gIndex == 0) {
                    this.dataTime['hour'] = iIndex + 1;
                } else {
                    if (iIndex == 1) {
                        this.dataTime['minute'] = 30;
                    } else {
                        this.dataTime['minute'] = 0;
                    }
                }
                console.info(this.dataTime)
            },
            onChange() {
                if (this.selectedCityFrom && this.selectedCityTo) {
                    let cities = [];
                    cities.push(this.selectedCityFrom.name);
                    cities.push(this.selectedCityTo.name);
                    if (cities.indexOf('Орехов') != -1 && cities.indexOf('Запорожье') != -1) {
                        return this.formType = 'special';
                    }
                }
                return this.formType = 'default';
            },
        }
    }
</script>

<style scoped>
    .contact-section {
        padding-top: 40px;
    }
</style>

<style>
    .smooth-picker[data-v-a1dc87f8] {
        font-size: 1rem;
        height: 10em;
        position: relative;
        background-color: #fff;
        overflow: hidden
    }

    .smooth-picker .smooth-list[data-v-a1dc87f8] {
        height: 6.25em;
        position: relative;
        top: 4em
    }

    .smooth-picker .smooth-item[data-v-a1dc87f8] {
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        width: 100%;
        text-overflow: ellipsis;
        white-space: nowrap;
        display: block;
        text-align: center;
        will-change: transform;
        contain: strict;
        height: 2em;
        font-size: 1.5em
    }

    .smooth-picker .smooth-handle-layer[data-v-a1dc87f8] {
        position: absolute;
        width: 100%;
        height: calc(100% + 2px);
        left: 0;
        right: 0;
        top: -1px;
        bottom: -1px
    }

    .smooth-picker .smooth-handle-layer .smooth-top[data-v-a1dc87f8] {
        border-bottom: 1px solid #c8c7cc;
        background: linear-gradient(180deg, #fff 10%, hsla(0, 0%, 100%, .7));
        -webkit-transform: translateZ(5.625em);
        transform: translateZ(5.625em)
    }

    .smooth-picker .smooth-handle-layer .smooth-middle[data-v-a1dc87f8] {
        height: 3em
    }

    .smooth-picker .smooth-handle-layer .smooth-bottom[data-v-a1dc87f8] {
        border-top: 1px solid #c8c7cc;
        background: linear-gradient(0deg, #fff 10%, hsla(0, 0%, 100%, .7));
        -webkit-transform: translateZ(5.625em);
        transform: translateZ(5.625em)
    }

    .flex-box[data-v-a1dc87f8] {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex
    }

    .flex-box.direction-column[data-v-a1dc87f8] {
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .flex-box.direction-row[data-v-a1dc87f8] {
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row
    }

    .flex-box .flex-1[data-v-a1dc87f8] {
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1
    }

    .flex-box .flex-2[data-v-a1dc87f8] {
        -webkit-flex: 2;
        -ms-flex: 2;
        flex: 2
    }

    .flex-box .flex-3[data-v-a1dc87f8] {
        -webkit-flex: 3;
        -ms-flex: 3;
        flex: 3
    }

    .flex-box .flex-4[data-v-a1dc87f8] {
        -webkit-flex: 4;
        -ms-flex: 4;
        flex: 4
    }

    .flex-box .flex-5[data-v-a1dc87f8] {
        -webkit-flex: 5;
        -ms-flex: 5;
        flex: 5
    }

    .flex-box .flex-6[data-v-a1dc87f8] {
        -webkit-flex: 6;
        -ms-flex: 6;
        flex: 6
    }

    .flex-box .flex-7[data-v-a1dc87f8] {
        -webkit-flex: 7;
        -ms-flex: 7;
        flex: 7
    }

    .flex-box .flex-8[data-v-a1dc87f8] {
        -webkit-flex: 8;
        -ms-flex: 8;
        flex: 8
    }

    .flex-box .flex-9[data-v-a1dc87f8] {
        -webkit-flex: 9;
        -ms-flex: 9;
        flex: 9
    }

    .flex-box .flex-10[data-v-a1dc87f8] {
        -webkit-flex: 10;
        -ms-flex: 10;
        flex: 10
    }

    .flex-box .flex-11[data-v-a1dc87f8] {
        -webkit-flex: 11;
        -ms-flex: 11;
        flex: 11
    }

    .flex-box .flex-12[data-v-a1dc87f8] {
        -webkit-flex: 12;
        -ms-flex: 12;
        flex: 12
    }
</style>

<style>
    fieldset[disabled] .multiselect {
        pointer-events: none
    }

    .multiselect__spinner {
        position: absolute;
        right: 1px;
        top: 1px;
        width: 48px;
        height: 35px;
        background: #fff;
        display: block
    }

    .multiselect__spinner:after, .multiselect__spinner:before {
        position: absolute;
        content: "";
        top: 50%;
        left: 50%;
        margin: -8px 0 0 -8px;
        width: 16px;
        height: 16px;
        border-radius: 100%;
        border: 2px solid transparent;
        border-top-color: #41b883;
        box-shadow: 0 0 0 1px transparent
    }

    .multiselect__spinner:before {
        animation: spinning 2.4s cubic-bezier(.41, .26, .2, .62);
        animation-iteration-count: infinite
    }

    .multiselect__spinner:after {
        animation: spinning 2.4s cubic-bezier(.51, .09, .21, .8);
        animation-iteration-count: infinite
    }

    .multiselect__loading-enter-active, .multiselect__loading-leave-active {
        transition: opacity .4s ease-in-out;
        opacity: 1
    }

    .multiselect__loading-enter, .multiselect__loading-leave-active {
        opacity: 0
    }

    .multiselect, .multiselect__input, .multiselect__single {
        font-family: inherit;
        font-size: 16px;
        -ms-touch-action: manipulation;
        touch-action: manipulation
    }

    .multiselect {
        box-sizing: content-box;
        display: block;
        position: relative;
        width: 100%;
        min-height: 40px;
        text-align: left;
        color: #35495e
    }

    .multiselect * {
        box-sizing: border-box
    }

    .multiselect:focus {
        outline: none
    }

    .multiselect--disabled {
        background: #ededed;
        pointer-events: none;
        opacity: .6
    }

    .multiselect--active {
        z-index: 50
    }

    .multiselect--active:not(.multiselect--above) .multiselect__current, .multiselect--active:not(.multiselect--above) .multiselect__input, .multiselect--active:not(.multiselect--above) .multiselect__tags {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }

    .multiselect--active .multiselect__select {
        transform: rotate(180deg)
    }

    .multiselect--above.multiselect--active .multiselect__current, .multiselect--above.multiselect--active .multiselect__input, .multiselect--above.multiselect--active .multiselect__tags {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .multiselect__input, .multiselect__single {
        position: relative;
        display: inline-block;
        min-height: 20px;
        line-height: 20px;
        border: none;
        border-radius: 5px;
        background: #fff;
        padding: 0;
        padding-top: 1px;
        width: 100%;
        transition: border .1s ease;
        box-sizing: border-box;
        margin-bottom: 0;
        vertical-align: top;
        font-size: 13px;
    }

    .multiselect__input:-ms-input-placeholder {
        color: #35495e
    }

    .multiselect__input::placeholder {
        color: #35495e
    }

    .multiselect__tag ~ .multiselect__input, .multiselect__tag ~ .multiselect__single {
        width: auto
    }

    .multiselect__input:hover, .multiselect__single:hover {
        border-color: #cfcfcf
    }

    .multiselect__input:focus, .multiselect__single:focus {
        border-color: #a8a8a8;
        outline: none
    }

    .multiselect__single {
        padding-left: 5px;
        margin-bottom: 8px
    }

    .multiselect__tags-wrap {
        display: inline
    }

    .multiselect__tags {
        min-height: 48px;
        display: block;
        padding: 12px 40px 0 8px;
        border-radius: 0px;
        border: 1px solid #e5e6e9;
        background: #fff;
        font-size: 13px
    }

    .multiselect__tag {
        position: relative;
        display: inline-block;
        padding: 4px 26px 4px 10px;
        border-radius: 5px;
        margin-right: 10px;
        color: #fff;
        line-height: 1;
        background: #41b883;
        margin-bottom: 5px;
        white-space: nowrap;
        overflow: hidden;
        max-width: 100%;
        text-overflow: ellipsis
    }

    .multiselect__tag-icon {
        cursor: pointer;
        margin-left: 7px;
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        font-weight: 700;
        font-style: normal;
        width: 22px;
        text-align: center;
        line-height: 22px;
        transition: all .2s ease;
        border-radius: 5px
    }

    .multiselect__tag-icon:after {
        content: "\D7";
        color: #266d4d;
        font-size: 14px
    }

    .multiselect__tag-icon:focus, .multiselect__tag-icon:hover {
        background: #369a6e
    }

    .multiselect__tag-icon:focus:after, .multiselect__tag-icon:hover:after {
        color: #fff
    }

    .multiselect__current {
        min-height: 40px;
        overflow: hidden;
        padding: 8px 30px 0 12px;
        white-space: nowrap;
        border-radius: 5px;
        border: 1px solid #e8e8e8
    }

    .multiselect__current, .multiselect__select {
        line-height: 16px;
        box-sizing: border-box;
        display: block;
        margin: 0;
        text-decoration: none;
        cursor: pointer
    }

    .multiselect__select {
        position: absolute;
        width: 40px;
        height: 38px;
        right: 1px;
        top: 5px;
        padding: 4px 8px;
        text-align: center;
        transition: transform .2s ease
    }

    .multiselect__select:before {
        position: relative;
        right: 0;
        top: 65%;
        color: #999;
        margin-top: 4px;
        border-color: #999 transparent transparent;
        border-style: solid;
        border-width: 5px 5px 0;
        content: ""
    }

    .multiselect__placeholder {
        color: #adadad;
        display: inline-block;
        margin-bottom: 10px;
        padding-top: 2px
    }

    .multiselect--active .multiselect__placeholder {
        display: none
    }

    .multiselect__content-wrapper {
        position: absolute;
        display: block;
        background: #fff;
        width: 100%;
        max-height: 240px;
        overflow: auto;
        border: 1px solid #e8e8e8;
        border-top: none;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        z-index: 50;
        -webkit-overflow-scrolling: touch
    }

    .multiselect__content {
        list-style: none;
        display: inline-block;
        padding: 0;
        margin: 0;
        min-width: 100%;
        vertical-align: top
    }

    .multiselect--above .multiselect__content-wrapper {
        bottom: 100%;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom: none;
        border-top: 1px solid #e8e8e8
    }

    .multiselect__content::webkit-scrollbar {
        display: none
    }

    .multiselect__element {
        display: block
    }

    .multiselect__option {
        display: block;
        padding: 12px;
        min-height: 40px;
        line-height: 16px;
        text-decoration: none;
        text-transform: none;
        vertical-align: middle;
        position: relative;
        cursor: pointer;
        white-space: nowrap
    }

    .multiselect__option:after {
        top: 0;
        right: 0;
        position: absolute;
        line-height: 40px;
        padding-right: 12px;
        padding-left: 20px;
        font-size: 13px
    }

    .multiselect__option--highlight {
        background: #6785FF;
        outline: none;
        color: #fff
    }

    .multiselect__option--highlight:after {
        content: attr(data-select);
        background: #6785FF;
        color: #fff
    }

    .multiselect__option--selected {
        background: #f3f3f3;
        color: #35495e;
        font-weight: 700
    }

    .multiselect__option--selected:after {
        content: attr(data-selected);
        color: silver
    }

    .multiselect__option--selected.multiselect__option--highlight {
        background: #ff6a6a;
        color: #fff
    }

    .multiselect__option--selected.multiselect__option--highlight:after {
        background: #ff6a6a;
        content: attr(data-deselect);
        color: #fff
    }

    .multiselect--disabled .multiselect__current, .multiselect--disabled .multiselect__select {
        background: #ededed;
        color: #a6a6a6
    }

    .multiselect__option--disabled {
        background: #ededed !important;
        color: #a6a6a6 !important;
        cursor: text;
        pointer-events: none
    }

    .multiselect__option--group {
        background: #ededed;
        color: #35495e
    }

    .multiselect__option--group.multiselect__option--highlight {
        background: #35495e;
        color: #fff
    }

    .multiselect__option--group.multiselect__option--highlight:after {
        background: #35495e
    }

    .multiselect__option--disabled.multiselect__option--highlight {
        background: #dedede
    }

    .multiselect__option--group-selected.multiselect__option--highlight {
        background: #ff6a6a;
        color: #fff
    }

    .multiselect__option--group-selected.multiselect__option--highlight:after {
        background: #ff6a6a;
        content: attr(data-deselect);
        color: #fff
    }

    .multiselect-enter-active, .multiselect-leave-active {
        transition: all .15s ease
    }

    .multiselect-enter, .multiselect-leave-active {
        opacity: 0
    }

    .multiselect__strong {
        margin-bottom: 8px;
        line-height: 20px;
        display: inline-block;
        vertical-align: top
    }

    [dir=rtl] .multiselect {
        text-align: right
    }

    [dir=rtl] .multiselect__select {
        right: auto;
        left: 1px
    }

    [dir=rtl] .multiselect__tags {
        padding: 8px 8px 0 40px
    }

    [dir=rtl] .multiselect__content {
        text-align: right
    }

    [dir=rtl] .multiselect__option:after {
        right: auto;
        left: 0
    }

    [dir=rtl] .multiselect__clear {
        right: auto;
        left: 12px
    }

    [dir=rtl] .multiselect__spinner {
        right: auto;
        left: 1px
    }

    @keyframes spinning {
        0% {
            transform: rotate(0)
        }
        to {
            transform: rotate(2turn)
        }
    }
</style>
