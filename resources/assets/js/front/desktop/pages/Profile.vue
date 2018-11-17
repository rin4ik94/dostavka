<template>
     <div class="content" v-if="user">
      <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>
      <div class="container" v-else>
        <div class="content-inner">
        <main class="main">
          <h1 class="main-title">{{$t('mydata')}}</h1>
          <div class="card">
            <form class="card-body needs-validation" novalidate>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_firstname">{{$t('file.name')}}</label>
                <div class="col-9">
                  <input v-model="user.data.first_name" class="form-control" id="profile_firstname" name="profile_firstname" type="text" :placeholder="$t('file.fill')" required>
                  <div class="invalid-feedback">{{$t('file.fill')}}</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_lastname">{{$t('file.last')}}</label>
                <div class="col-9">
                  <input v-model="user.data.last_name" class="form-control" id="profile_lastname" name="profile_lastname" type="text" :placeholder="$t('file.fill')" required>
                  <div class="invalid-feedback">{{$t('file.fill')}}</div>
              </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_birthday">{{$t('file.datebirth')}}</label>
                <div class="col-9">
                    <DatePicker :value="user.data.birth_date" v-model="user.data.birth_date" placeholder="DD.MM.YYYY" class="form-control" />
                  <div class="invalid-feedback">{{$t('file.fill')}}</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3" for="profile_gender">{{$t('file.gender')}}</label>
                <div class="col-9">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input v-model="user.data.jender" type="radio" id="profile_gender1" name="profile_gender" value="1" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="profile_gender1">{{$t('file.man')}}</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input v-model="user.data.jender" type="radio" id="profile_gender2" name="profile_gender" value="2" class="custom-control-input" required>
                    <label class="custom-control-label" for="profile_gender2">{{$t('file.woman')}}</label>
                  </div>
                  <div class="invalid-feedback">{{$t('file.fill')}}</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_phone">{{$t('file.phone')}}</label>
                <div class="col-9">
                  <input  v-model="user.data.phone" class="form-control" id="profile_phone" name="profile_phone" type="text"  disabled required>
                </div>
              </div>
              <div class="row">
                <div class="col-9 offset-3">
                  <button class="btn btn-green" @click.prevent="saveUserData">{{$t('file.edit')}}</button>
                </div>
              </div>
            </form>
          </div>
        </main>
        <aside class="aside">

        </aside>
       
        </div>
      </div>
    </div>
</template>
<script>
import DatePicker from "../components/DatePicker";
import { mapGetters, mapActions } from "vuex";

export default {
  components: { DatePicker },
  data() {
    return {
      user: null,
      showPage:false
      // form: {
      //   date: null,
      //   phone: this.user && this.user.data ? this.user.data.phone : null
      // }
    };
  },
  methods: {
    saveUserData() {
      axios
        .patch(`api/clients/${this.user.data.id}/settings`, this.user.data)
        .then(response => {
          this.$store.dispatch("fetchUser").then(() => {
            flash("Изменение прошло успешно!");
          });
        });
    }
  },
  mounted() {
    // setTimeout(() => {
      axios.get("api/me").then(response => {
        this.user = response.data;
        this.showPage = true
      });
    // }, 0);
  }
};
</script>
