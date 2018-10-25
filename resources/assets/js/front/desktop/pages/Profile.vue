<template>
     <div class="content">
      <div class="container">
        <div class="content-inner">
        <main class="main">
          <h1 class="main-title">Мои данние</h1>
          <div class="card">
            <form class="card-body needs-validation" novalidate>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_firstname">Имя</label>
                <div class="col-9">
                  <input class="form-control" id="profile_firstname" name="profile_firstname" type="text" value="Jaloliddin" required>
                  <div class="invalid-feedback">Пожалуйста заполните поле</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_lastname">Фамилия</label>
                <div class="col-9">
                  <input class="form-control" id="profile_lastname" name="profile_lastname" type="text" value="Kholmatov" required>
                  <div class="invalid-feedback">Пожалуйста заполните поле</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_birthday">Дата рождения</label>
                <div class="col-9">
                    <DatePicker v-model="form.date" placeholder="DD.MM.YYYY" class="form-control" />
                  <div class="invalid-feedback">Пожалуйста заполните поле</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3" for="profile_gender">Пол</label>
                <div class="col-9">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="profile_gender1" name="profile_gender" value="1" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="profile_gender1">Мужской</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="profile_gender2" name="profile_gender" value="2" class="custom-control-input" required>
                    <label class="custom-control-label" for="profile_gender2">Женский</label>
                  </div>
                  <div class="invalid-feedback">Пожалуйста заполните поле</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label" for="profile_phone">Телефон</label>
                <div class="col-9">
                  <input class="form-control" id="profile_phone" name="profile_phone" type="text" value="+998903003363" disabled required>
                </div>
              </div>
              <div class="row">
                <div class="col-9 offset-3">
                  <button class="btn btn-green" type="submit">Редактировать</button>
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
export default {
  components: { DatePicker },
  data() {
    return {
      form: {
        date: null
      }
    };
  }
};
</script>
