<template>
<div class="page-body-footer">
    <nav>
        <ul class="pagination">
        <li  class="page-item" :class="pagination.current_page <= 1 ? 'disabled' : ''">
            <a @click="$emit('topGo')" class="page-link" @click.prevent="changePage(pagination.current_page - 1)">
              &#8592;<span class="text"> {{$t('pagination.previous')}}</span></a>
        </li> 
        <li :key="page.id"
                    v-for="page in pages" class="page-item" :class="isCurrentPage(page) ? 'active' : ''"
                    @click.prevent="changePage(page)">
            <a @click="$emit('topGo')" class="page-link">{{page}}</a>
            <!-- <span class="sr-only">(current)</span> -->
        </li> 
        <li class="page-item" :class="pagination.current_page >= pagination.last_page ? 'disabled' : ''">
            <a @click="$emit('topGo')" @click.prevent="changePage(pagination.current_page + 1)" class="page-link">
              <span class="text">{{$t('pagination.next')}} </span>&#8594;</a>
        </li>
        </ul>
    </nav>
    <!-- <ul class="pagination pagination-sm">
        <li
            class="page-item"
            :class="pagination.current_page <= 1 ? 'disabled' : ''"
        >
            <a
                class="page-link"
                @click.prevent="changePage(pagination.current_page - 1)"
            >&laquo;</a>
                </li>
                <li :key="page.id"
                    v-for="page in pages"
                    class="page-item"
                    :class="isCurrentPage(page) ? 'active' : ''"
                    @click.prevent="changePage(page)"
                >
                    <a
                        class="page-link"
                        href="#"
                    >{{page}}</a>
                        </li>
                        <li
                            class="page-item"
                            :class="pagination.current_page >= pagination.last_page ? 'disabled' : ''"
                        >
                            <a
                                class="page-link"
                                @click.prevent="changePage(pagination.current_page + 1)"
                            > &raquo;</a>
                                </li>
    </ul>
    <div class="page-body-footer-info"> c {{pagination.from}} до {{pagination.to}} показано из {{pagination.total}} результатов</div> -->
</div>
</template>

<script>
export default {
  props: ["pagination", "offset"],
  methods: {
    isCurrentPage(page) {
      return this.pagination.current_page === page;
    },
    changePage(page) {
      if (page > this.pagination.last_page) {
        page = this.pagination.last_page;
      }
      this.pagination.current_page = page;
      this.$emit("paginate");
    }
  },
  computed: {
    pages() {
      let pages = [];
      let from = this.pagination.current_page - Math.floor(this.offset / 2);
      //   console.log(from);
      if (from < 1) {
        from = 1;
      }
      let to = from + this.offset - 1;
      //   console.log(to);
      if (to > this.pagination.last_page) {
        to = this.pagination.last_page;
      }
      while (from <= to) {
        pages.push(from);
        from++;
      }
      return pages;
    }
  }
};
</script>

<style>
