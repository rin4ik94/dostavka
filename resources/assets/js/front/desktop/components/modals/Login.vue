<template>
  <div class="modal fade login" id="login" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"><i class="icon">close</i></button>
        <form class="modal-body" v-if="step==1">
          <h4 class="modal-title">{{$t('login.title')}}</h4>
          <p>{{$t('login.pre_title')}}</p>
          <div class="form-group">
            <div class="input-group">
              <label class="input-group-prepend" for="login_phone">
                <span class="input-group-text">+998</span>
              </label>
              <input :maxlength="max" v-on:keypress="isNumber($event)" v-model="form.phone" class="form-control" type="text" id="login_phone" :placeholder="$t('login.phone_placeholder')">
            </div>
            <div class="form-text">{{$t('login.sms_info')}}</div>
          </div>

          <button @click.prevent="sendSMS" :disabled="form.phone == null || form.phone && max != form.phone.length" class="btn btn-block btn-green">{{$t('login.button_send')}}</button>
        </form>
        <form @submit.prevent="verifyCode" class="modal-body" v-if="step == 2">
          <h4>+998{{form.phone}}</h4>
          <p>{{$t('login.sms_sent_info')}}</p>
          <div class="form-group">
            <input :maxlength="code" v-model="form.code" class="form-control" type="text" :placeholder="$t('login.sms_code')">

            <p v-if="error">{{$t('login.incorrect_password')}}</p>
            <div class="form-text">
              <button :disabled="sent" @click.prevent="repeatSmsSend" class="btn btn-link" type="button">
                <i class="icon" v-if="!sent">refresh</i>
                <i class="icon" v-else>done</i>
                <span class="text">{{$t('login.send_again')}}
                </span>
              </button>
            </div>
          </div>
          <button type="submit" @click.prevent="verifyCode" class="btn btn-block btn-green" :disabled="form.code == null || form.code && code != form.code.length">{{$t('login.next')}}</button>
          <button @click.prevent="step = 1" class="btn btn-block btn-light">{{$t('login.change_number')}}</button>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
import { mapActions, mapGetters } from "vuex";
import { isEmpty } from "lodash";
import localforage from "localforage"; 
export default {
  data() {
    return {
      error: null,
      max: 9,
      sent:false,
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
    repeatSmsSend(){
      
      this.sent = !this.sent
      
      this.sendSMS()
    },
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
