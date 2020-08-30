import Show from './Show.vue';
import Layout from "../layout/Layout";
export default [
    {
        path: '/flowers',
        component: Layout,
        children: [
            {
                path: '',
                name: 'customers.index',
                component: Show,
            },
        ]
    },
];
