<template>
<div class="modal fade regions" id="Regions" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div v-if="!showPage" class="loader"><div class="loader-container"></div></div>
    <div class="modal-content" v-else>
      
      <div class="modal-header">
        <h4 class="modal-title">{{$t('file.region')}}</h4>
        <button type="button" class="close" data-dismiss="modal"><i class="icon">close</i></button>
      </div>
      <div class="modal-body">
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
  props: ["regions"],
  data(){
    return{
      showPage:false
    }
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
  mounted(){
        this.showPage = true    
  }
};
</script>

