<template functional>
    <div>
        <label
            v-if="props.title"
            :for="data.attrs.id"
            class="block text-sm font-medium leading-5 text-gray-700"
        > {{ props.title }}</label>
        <div class="mt-1 relative rounded-md shadow-sm">
            <slot>
                <input
                    class="form-input block w-full pr-10 sm:text-sm sm:leading-5"
                    :class="[
            props.error ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red' : 'border-gray-400 text-gray-900 placeholder-gray-600 focus:border-green-300 focus:shadow-outline-green'
          ]"
                    :value="props.value"
                    :aria-invalid="props.error"
                    :aria-describedby="`error-${data.attrs.name}`"
                    v-bind="data.attrs"
                    v-on="{
            ...listeners,
            input: event => data.on.input(event.target.value),
          }"
                />
            </slot>
            <div
                v-if="props.error"
                class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"
            >
                <svg
                    class="h-5 w-5 text-red-500"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd"
                    />
                </svg>
            </div>
        </div>
        <p
            v-if="props.error"
            class="mt-2 text-sm text-red-600"
        >
            {{ props.error }}
        </p>
    </div>
</template>

<script>
export default {
    name: 'tailwind-input',
    props: {
        title: {type: String, default: null},
        value: {type: null, default: undefined},
        error: {type: String, default: null},
    },
};
</script>

<style scoped>
</style>
