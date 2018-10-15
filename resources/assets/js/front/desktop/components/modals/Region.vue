<template>
<div class="modal fade regions" id="Regions" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5 class="modal-title">Ваш регион</h5>
        <ul class="nav regions-nav">
          <li class="nav-item" :key="region.id" v-for="region in regions">
            <a  @click.prevent="submitRegion(region.id)" class="nav-link">{{region.name}}</a> 
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</template>
<script>
import { mapActions, mapGetters } from "vuex";

export default {
  data() {
    return {
      regions: null
    };
  },
  methods: {
    ...mapActions({
      setRegion: "setRegionId"
    }),
    submitRegion(id) {
      this.setRegion(id).then(() => {
        $("#Regions").modal("hide");
      });
    }
  },
  created() {
    axios.get("/api/regions").then(response => {
      this.regions = response.data.data;
    });
  }
};
</script>

