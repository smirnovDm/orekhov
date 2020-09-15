<template functional>
    <form
        :class="[
      data.staticClass,
      data.class
    ]"
        v-bind="attrs"
        v-on="{
      ...listeners,
      keydown: $options.handleErrors(props),
      change: $options.handleErrors(props),
    }"
    >
        <div
            :class="{'border-t border-gray-200': props.bordered}"
        >
            <div class="mt-6 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6">
                <slot></slot>
            </div>
        </div>

        <div
            :class="{'border-t border-gray-200': props.bordered}"
            class="mt-8 pt-5"
        >
            <div class="flex justify-end">
                <slot name="cancel">
          <span class="inline-flex rounded-md shadow-sm">
            <button
                type="reset"
                class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out"
                @click="listeners['cancel']"
            >
              Отменить
            </button>
          </span>
                </slot>
                <slot name="save">
          <span class="ml-3 inline-flex rounded-md shadow-sm">
            <button
                :disabled="props.loading"
                type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
            >
              <spinner v-if="props.loading"></spinner>
              <span v-if="props.editing">Редактировать</span>
              <span v-else>Сохранить</span>
            </button>
          </span>
                </slot>
            </div>
        </div>
    </form>
</template>

<script>
import ValidationError from '../../utils/ValidationError';
export default {
    name: 'tailwind-form',
    props: {
        editing: {type: Boolean, default: false},
        loading: {type: Boolean, default: false},
        errors: {type: Object, default: () => ({})},
        bordered: {type: Boolean, default: false},
    },
    handleErrors(props) {
        return event => {
            if (event.target.name && props.errors instanceof ValidationError) {
                props.errors.clear(event.target.name);
            }
        };
    },
};
</script>
