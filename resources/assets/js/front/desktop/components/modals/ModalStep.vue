<template>

    <div class="modal fade login" id="modalstep" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form @submit.prevent="verifyCode" class="modal-body">
                    <h4>+998 {{phone}}</h4>
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
    props:['phone','last_name','fist_name'],
    
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
      if (this.phone && this.max == this.phone.length) { 
        let data = "+998" + this.phone;
        let response = await axios.post("/api/sms/create", {
          phone: data, last_name: this.last_name ? this.last_name :"",
          first_name: this.first_name ? this.first_name : ""
        });
      }
    },
    verifyCode() {
      if (this.form.code && this.code == this.form.code.length) {
        let data = "+998" + this.phone;
        axios
          .get(`/api/sms/check?its=1&code=${this.form.code}&phone=${data}`)
          .then(response => {
            $('#modalstep').modal('hide')
            this.$emit('fine')
            let token = response.data.meta.token; 
            this.setToken(token).then(() => {
              this.fetchUser();
              // this.setPhone(response.data.data.phone);
            });
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
  mounted(){
          $("#modalstep").on("show.bs.modal", this.sendSMS);
  }
}
</script>
