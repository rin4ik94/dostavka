<template>
    <li class="nav-item"  >
      <a  @click.prevent="updateActive(category.id)"  :class="[fieldClasses]" class="nav-link" >
        {{category.name}}</a> 
        <ul class="nav"  v-if="category.children.length && isOpen" >
          <SubCategories  :index="cat.id"  @updateActive="updateActive(cat.id)" :activeIndex="activeIndex" v-for="cat in category.children" :key="cat.id" :category="cat" />
        </ul>
    </li> 
</template>
<script>
export default {
  props: ["category", "activeIndex", "index"],
  data() {
    return {
      isOpen: false
    };
  },
  methods: {
    updateActive(id) {
      console.log(id);
      if (this.category.id == id) {
        this.isOpen = !this.isOpen;
      }
      this.$emit("updateActive", id);

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
      if (this.category.slug == this.$route.params.sluged) {
        return true;
      }
      return false;
    }
  },
  mounted() {
    this.category.children.map((v, k) => {
      if (v.slug == this.$route.params.sluged) {
        this.isOpen = true;
      }
    });
  }
};
</script>
