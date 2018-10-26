<template>
    <div class="modal fade login" id="login" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="modal-body" v-if="step==1">
        <h4>Вход</h4>
        <p>Введите свой номер телефона</p>
        <div class="form-group">
          <div class="input-group">
            <label class="input-group-prepend" for="login_phone">
              <span class="input-group-text">+998</span>
            </label>
            <input :maxlength="max" v-on:keypress="isNumber($event)"  v-model="form.phone" class="form-control" type="text" id="login_phone" placeholder="Телефон">
          </div>
          <div class="form-text">На указанный номер будет отправлено СМС с кодом подтверждения номера.</div>
        </div>
        
        <button @click.prevent="sendSMS" :disabled="form.phone == null || form.phone && max != form.phone.length" class="btn btn-block btn-green">Получить код для входа</button>
      </form>
      <form @submit.prevent="verifyCode" class="modal-body"  v-if="step == 2">
        <h4>+998{{form.phone}}</h4>
        <p>Мы отправили вам SMS с кодом. Пожалуйста, введите его в поле ниже</p>
        <div class="form-group">
          <input :maxlength="code" v-model="form.code" class="form-control" type="text" placeholder="Код из смс">
          
           <p  v-if="error">Неправильный пароль</p>
          <div class="form-text">
            <button @click.prevent="sendSMS" class="btn btn-link" type="button">
              <i class="icon">refresh</i><span class="text">Отправить еще раз</span>
            </button>
          </div>
        </div>
        <button type="submit" @click.prevent="verifyCode" class="btn btn-block btn-green" :disabled="form.code == null || form.code && code != form.code.length">Далее</button>
        <button @click.prevent="step = 1" class="btn btn-block btn-light">Изменить номер</button>
      </form>
    </div>
  </div>
</div>
</template>
<script>
import { mapActions, mapGetters } from "vuex";
import { isEmpty } from "lodash";
import localforage from "localforage";
import { EventBus } from "../../bus.js";
export default {
  data() {
    return {
      error: null,
      max: 9,
      code: 4,
      step: 1,
      form: {
        phone: null,
        code: null
      }
    };
  },
  computed: mapGetters({
    user: "user"
  }),
  methods: {
    ...mapActions({
      fetchUser: "fetchUser",
      setToken: "setToken"
    }),
    async sendSMS() {
      if (this.form.phone && this.max == this.form.phone.length) {
        this.step = 2;
        let data = "+998" + this.form.phone;
        let response = await axios.post("/api/sms/create", {
          phone: data
        });
      }
    },
    verifyCode() {
      if (this.form.code && this.code == this.form.code.length) {
        let data = "+998" + this.form.phone;
        axios
          .get(`/api/sms/check?its=1&code=${this.form.code}&phone=${data}`)
          .then(response => {
            let token = response.data.meta.token;
            $("#login").modal("hide");
            this.setToken(token).then(() => {
              this.fetchUser();
              // this.setPhone(response.data.data.phone);
            });
            if (response.data.new == 1) {
              this.$router.replace({ name: "profile" });
            }
            this.form = {
              phone: "",
              code: ""
            };
          })
          .catch(error => {
            this.error = "Не правильный пароль";
          });
      }
    },
    isNumber: function(evt) {
      evt = evt ? evt : window.event;
      var charCode = evt.which ? evt.which : evt.keyCode;
      if (
        charCode > 31 &&
        (charCode < 48 || charCode > 57) &&
        charCode !== 46
      ) {
        evt.preventDefault();
      } else {
        return true;
      }
    }
  },
  mounted() {
    $("#login").on("hide.bs.modal", e => (this.step = 1));
  }
};
</script>
