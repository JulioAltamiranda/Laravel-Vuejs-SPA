<template>
    <layout>
        <template slot="main">
            <main class="main grid main-contact">
                <div class="contact">
                    <form class="form" @submit.prevent="submit">
                        <div
                            class="form-group"
                            :class="{ 'form-group--error': $v.name.$error }"
                        >
                            <label for="">Tu nombre</label>
                            <input
                                type="text"
                                placeholder="nombre"
                                v-model.trim="$v.name.$model"
                            />
                            <div class="error" v-if="!$v.name.required">
                                Este campo es requerido
                            </div>
                            <div class="error" v-if="!$v.name.minLength">
                                Nombre debe tener al menos
                                {{ $v.name.$params.minLength.min }} letras.
                            </div>
                        </div>
                        <div
                            class="form-group"
                            :class="{ 'form-group--error': $v.surname.$error }"
                        >
                            <label for="">Tu apellido</label>
                            <input
                                type="text"
                                placeholder="apellido"
                                v-model.trim="$v.surname.$model"
                            />
                            <div class="error" v-if="!$v.surname.required">
                                Este campo es requerido
                            </div>
                            <div class="error" v-if="!$v.surname.minLength">
                                Apellido debe tener al menos
                                {{ $v.surname.$params.minLength.min }} letras.
                            </div>
                        </div>
                        <div
                            class="form-group"
                            :class="{ 'form-group--error': $v.email.$error }"
                        >
                            <label for="">Tu email</label>
                            <input
                                type="email"
                                placeholder="email"
                                v-model.trim="$v.email.$model"
                            />
                            <div class="error" v-if="!$v.email.required">
                                Este campo es requerido
                            </div>
                            <div class="error" v-if="!$v.email.email">
                                Este campo debe ser tipo email
                            </div>
                            <div class="error" v-if="!$v.email.minLength">
                                Email debe tener al menos
                                {{ $v.email.$params.minLength.min }} letras.
                            </div>
                        </div>
                        <div
                            class="form-group"
                            :class="{ 'form-group--error': $v.password.$error }"
                        >
                            <label for="">Tu contraseña</label>
                            <input
                                type="password"
                                placeholder="password"
                                v-model.trim="$v.password.$model"
                            />
                            <div class="error" v-if="!$v.password.required">
                                Este campo es requerido
                            </div>
                            <div class="error" v-if="!$v.password.minLength">
                                Password debe tener al menos
                                {{ $v.password.$params.minLength.min }} letras.
                            </div>
                        </div>
                        <div style="display:flex;">
                            <button style="margin-right:8px;min-width:100px;">
                                Enviar
                            </button>
                            <p class="typo__p" v-if="submitStatus === 'OK'">
                                Gracias por su envío: D
                            </p>
                            <p class="typo__p" v-if="submitStatus === 'ERROR'">
                                Complete el formulario correctamente
                            </p>
                            <p
                                class="typo__p"
                                v-if="submitStatus === 'PENDING'"
                            >
                                Enviando...
                            </p>
                        </div>
                    </form>
                </div>
            </main>
        </template>
    </layout>
</template>

<script>
import layout from "../components/layouts/defaultLayout";
import mainContainer from "../components/layouts/main";
import { required, minLength, email } from "vuelidate/lib/validators";
export default {
    components: {
        layout,
        mainContainer
    },
    data() {
        return {
            name: "",
            surname: "",
            email: "",
            password: "",
            submitStatus: null
        };
    },
    validations: {
        name: {
            required,
            minLength: minLength(5)
        },
        surname: {
            required,
            minLength: minLength(6)
        },
        email: {
            required,
            minLength: minLength(8),
            email
        },
        password: {
            required,
            minLength: minLength(8)
        }
    },
    methods: {
        submit() {
            this.$v.$touch();
            if (this.$v.$invalid) {
                this.submitStatus = "ERROR";
            } else {
                // do your submit logic here
                this.submitStatus = "PENDING";
                setTimeout(() => {
                    this.submitStatus = "OK";
                }, 500);
            }
        }
    }
};
</script>

<style>
.main-contact {
    grid-template-columns: 65%;
    justify-content: center;
    margin-bottom: 7em !important;
}

@media screen and (max-width: 993px) {
    .main-contact {
        grid-template-columns: 1fr !important;
    }
}
.form-group--error input {
    animation: move 0.3s ease;
    border-color: red !important;
}
.form-group--error input {
    border-color: red !important;
}
.form-group--error input:hover,
.form-group--error input:focus {
    border-color: red !important;
}
.error {
    color: red;
    font-size: 13px;
}
@keyframes move {
    30% {
        transform: translateX(12px);
    }
    70% {
        transform: translateX(-12px);
    }
}
</style>
