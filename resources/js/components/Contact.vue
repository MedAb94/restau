<template>
    <div>
        <v-carousel height="50vh">
            <v-carousel-item>
                <v-sheet
                    height="100%"
                    tile
                >
                    <v-row
                        class="fill-height"
                        align="center"
                        justify="center"
                    >
                        <v-img
                            :src="require('../assets/contact.jpg')"
                            cover
                        />
                    </v-row>
                </v-sheet>
            </v-carousel-item>
            <v-carousel-item>
                <v-sheet
                    height="100%"
                    tile
                >
                    <v-row
                        class="fill-height"
                        align="center"
                        justify="center"
                    >
                        <v-img
                            :src="require('../assets/about.jpg')"
                            cover
                        />
                    </v-row>
                </v-sheet>
            </v-carousel-item>
        </v-carousel>
        <v-container>
            <v-card class="bg-primary rounded py-5" elevation="8">
                <v-form v-model="valid">
                    <v-container>
                        <h2 class="text-center red--text">{{$t('contact.title')}}</h2>
                        <v-row>
                            <v-col
                                cols="12"
                                md="6"
                            >
                                <v-text-field
                                    v-model="name"
                                    :rules="nameRules"
                                    :label="$t('contact.name')"
                                    :placeholder="$t('contact.enter_name')"
                                    required
                                    outlined
                                    append-icon="mdi-account"
                                    color="white"
                                />
                            </v-col>

                            <v-col
                                cols="12"
                                md="6"
                            >
                                <v-text-field
                                    v-model="email"
                                    :rules="emailRules"
                                    :label="$t('contact.mail')"
                                    :placeholder="$t('contact.enter_email')"
                                    required
                                    outlined
                                    append-icon="mdi-email-outline"
                                    color="white"
                                />
                            </v-col>
                        </v-row>
                        <v-text-field
                            v-model="address"
                            label="Address"
                            placeholder="Enter your address here"
                            required
                            outlined
                            append-icon="mdi-map-marker"
                            color="white"
                        />
                        <v-text-field
                            v-model="phone"
                            :label="$t('contact.phone')"
                            :placeholder="$t('contact.enter_phone')"
                            required
                            outlined
                            append-icon="mdi-phone"
                            color="white"
                        />
                        <v-textarea
                            outlined
                            name="input-7-4"
                            label="Message"
                            :placeholder="$t('contact.enter_message')"
                            append-icon="mdi-android-messages"
                            color="white"
                        />
                        <v-row align="center">
                            <v-btn color="light-green accent-4" large class="mx-auto w-50">
                                {{$t('contact.send') }}
                            </v-btn>
                        </v-row>
                    </v-container>
                </v-form>
            </v-card>
        </v-container>
        <mailbox></mailbox>
    </div>
</template>

<script>
    import Mailbox from "./Mailbox";
    import Slider from "./Slider"

    export default {
        name: "Contact",
        components: {Mailbox, Slider},
        data() {
            return {
                valid: false,
                name: '',
                email: '',
                address: '',
                phone: '',
                message: '',
                nameRules: [
                    v => !!v || 'Name is required',
                    v => v.length <= 10 || 'Name must be less than 10 characters',
                ],
                emailRules: [
                    v => !!v || 'E-mail is required',
                    v => /.+@.+/.test(v) || 'E-mail must be valid',
                ],
            }
        }

    }
</script>

<style scoped>
    .v-text-field--outlined >>> fieldset {
        border-color: white;
    }

    .v-input__icon--append .v-icon {
        color: red !important;
    }

    .mdi:before {
        color: red !important;
    }
</style>
