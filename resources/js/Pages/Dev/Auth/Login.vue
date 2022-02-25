<script>
import { Head } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";
import { NInput, NButton, NSpace, NForm } from 'naive-ui'

export default {

    components: {
        Link,
        Head,
        NInput,
        NButton,
        NSpace,
        NForm
    },

    setup() {
        const form = useForm({
            login: null,
            password: null,
        });
        return { form };
    },
    methods: {
        LoginForm() {
            console.log(this.form)
        },
    },
}

</script>

<template>
    <Head title="Dev Login" />
    <div class="">
        <div class="py-40 px-10 sm:w-full md:w-1/3 mx-auto my-auto">
            <n-form @submit.prevent="LoginForm">
                <n-space vertical>
                    <n-input
                        v-model:value="form.login"
                        type="text"
                        size="large"
                        placeholder="Login"
                    />
                    <n-input
                    v-model:value="form.password"
                        type="password"
                        size="large"
                        :maxlength="8"
                        placeholder="Parol"
                        show-password-on="mousedown"
                    />
                    <n-button 
                        type="primary"
                        size="large"
                        attr-type="submit"
                        class="w-full bg-green-600"
                    >
                        Kirish
                    </n-button>
                </n-space>
            </n-form>
        </div>
    </div>
</template>
