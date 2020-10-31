<template>
  <TaskList />
</template>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';
import TaskList from './components/TaskList.vue';

@Options({
  components: {
    TaskList: TaskList,
  },
})
export default class App extends Vue {}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
