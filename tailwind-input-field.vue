<script>
import TailwindInput from './tailwind-input';
export default {
    name: 'tailwind-form-field',
    functional: true,
    components: {TailwindInput},
    render(h, context) {
        return h('div', {
            staticClass: 'sm:col-span-6',
        }, context.slots().default ? context.slots().default : [
            h(TailwindInput, context.data),
        ]);
    },
};
</script>
