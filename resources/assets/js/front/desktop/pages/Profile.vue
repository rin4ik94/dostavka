<template>
     <div class="content" v-if="user">
      <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>
      <div class="container" v-else>
        <div class="content-inner">
        <main class="main">
          <h1 class="main-title">Мои данние</h1>
          <div class="card">
            <form class="card-body needs-validation" novalidate>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_firstname">Имя</label>
                <div class="col-9">
                  <input v-model="user.data.first_name" class="form-control" id="profile_firstname" name="profile_firstname" type="text" placeholder="Заполните это поле" required>
                  <div class="invalid-feedback">Пожалуйста заполните поле</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_lastname">Фамилия</label>
                <div class="col-9">
                  <input v-model="user.data.last_name" class="form-control" id="profile_lastname" name="profile_lastname" type="text" placeholder="Заполните это поле" required>
                  <div class="invalid-feedback">Пожалуйста заполните поле</div>
              </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_birthday">Дата рождения</label>
                <div class="col-9">
                    <DatePicker :value="user.data.birth_date" v-model="user.data.birth_date" placeholder="DD.MM.YYYY" class="form-control" />
                  <div class="invalid-feedback">Пожалуйста заполните поле</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3" for="profile_gender">Пол</label>
                <div class="col-9">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input v-model="user.data.jender" type="radio" id="profile_gender1" name="profile_gender" value="1" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="profile_gender1">Мужской</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input v-model="user.data.jender" type="radio" id="profile_gender2" name="profile_gender" value="2" class="custom-control-input" required>
                    <label class="custom-control-label" for="profile_gender2">Женский</label>
                  </div>
                  <div class="invalid-feedback">Пожалуйста заполните поле</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_phone">Телефон</label>
                <div class="col-9">
                  <input  v-model="user.data.phone" class="form-control" id="profile_phone" name="profile_phone" type="text"  disabled required>
                </div>
              </div>
              <div class="row">
                <div class="col-9 offset-3">
                  <button class="btn btn-green" @click.prevent="saveUserData">Редактировать</button>
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
