<template>
    <li class="nav-item"  >
      <a @click.prevent="updateActive(category.id)" @click="isVisible = !isVisible"  :class="[activeIndex == category.id && category.children.length < 1 ? 'active' : '', category.children&&category.children.length >= 1  && category.children[0].id ==activeIndex || activeIndex == category.id &&category.children.length >= 1? 'selected': '']" class="nav-link" >
        {{category.name}}</a> 
        <ul  class="nav"  v-if="category.children.length && isVisible" >
            <SubCategories @updateProducts="updateActive" :activeIndex="activeIndex" v-for="cat in category.children" :key="cat.id" :category="cat" />
        </ul>
    </li> 
</template>
<script>
import { EventBus } from "../bus.js";

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
      //   EventBus.$emit("updateProducts", id);
    }
  }
};
</script>
