<template>
        <div class="card-footer d-flex align-items-center">
      <p class="m-0 text-muted">
        Page: {{ $page.props.basiskegs.current_page }} Showing
        <span>{{ $page.props.basiskegs.from }}</span> to
        <span>{{ $page.props.basiskegs.to }}</span> of
        <span>{{ $page.props.basiskegs_count }}</span> entries
      </p>
      <ul class="pagination m-0 ms-auto">
        <li
          v-if="$page.props.basiskegs.prev_page_url === null"
          :key="key"
          class="page-item disabled"
        >
          <Link class="page-link" tabindex="-1" aria-disabled="true">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <polyline points="15 6 9 12 15 18" />
            </svg>
            prev
          </Link>
        </li>
        <li v-else class="page-item">
          <Link
            :href="$page.props.basiskegs.prev_page_url"
            class="page-link"
            tabindex="-1"
            aria-disabled="false"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <polyline points="15 6 9 12 15 18" />
            </svg>
            prev
          </Link>
        </li>
        <li
          v-if="$page.props.basiskegs.next_page_url === null"
          :key="key"
          class="page-item disabled"
        >
          <Link class="page-link" tabindex="-1" aria-disabled="true">
            next
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <polyline points="9 6 15 12 9 18" />
            </svg>
          </Link>
        </li>
        <li v-else class="page-item">
          <Link
            :href="$page.props.basiskegs.next_page_url"
            class="page-link"
            tabindex="-1"
            aria-disabled="false"
          >
            next
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <polyline points="9 6 15 12 9 18" />
            </svg>
          </Link>
        </li>
      </ul>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Link,
  },
});
</script>