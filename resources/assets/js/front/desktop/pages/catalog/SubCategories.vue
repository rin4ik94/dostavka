<template> 

    <li class="nav-item"  >
      <a  @click.prevent="updateActive(category.id)"  :class="[fieldClasses]" class="nav-link" >
        {{category.name}}</a> 
        <ul class="nav"  v-if="category.children.length && isVisible" >
            <SubCategories @updateProducts="updateActive" :activeIndex="activeIndex" v-for="cat in category.children" :key="cat.id" :category="cat" />
        </ul>
    </li> 

</template>
<script>
export default {
  props: ["category", "activeIndex"],
  data() {
    return {
      isVisible: false
    };
  },
  methods: {
    updateActive(id) {
      this.$emit("updateProducts", id);
      this.isVisible = !this.isVisible;
      this.$router.push({ name: "ct", params: { sluged: this.category.slug } });
    }
  },
  computed: {
    fieldClasses() {
      return {
        active:
          this.activeIndex == this.category.id &&
          this.category.children.length < 1,
        selected: this.isParentSelected
      };
    },
    isParentSelected() {
      let data = 0;
      if (!this.category.children && !this.category.children.length >= 1) {
        return false;
      }
      if (
        this.category.id == this.activeIndex &&
        this.category.children.length >= 1
      ) {
        return true;
      }
      this.category.children.map((value, key) => {
        if (value.id == this.activeIndex) {
          data = 1;
          return true;
        }
      });
      if (data == 1) {
        return true;
      }

      return false;
    }
  }
};
</script>
