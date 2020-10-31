<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Todoist</h1>
          <h3>A simple task list for you convenience</h3>
        </div>
        <hr />
      </div>
      <div class="row">
        <div class="col-md-12">
          <div>
            <form class="form-inline" :key="newTaskForm" v-on:submit="submitForm">
              <input type="text" placeholder="what's on your mind" class="form-control" v-model="newTaskDescription" />
              <input type="submit" class="btn btn-primary" value="save" style="margin-left: 5px;" />
            </form>
          </div>
          <ul class="task-list">
            <li v-for="(task, index) in tasks" :key="index">
              <div v-if="task.completed_at == null">
                <input type="checkbox" />{{ task.description }}
              </div>
              <div v-if="task.completed_at != null" class="completed">
                {{ task.description }}
                <span class="complete_date">({{task.completed_at}})</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { Vue } from 'vue-class-component';
import {TaskApi} from '@/generated-client';

export default class TaskList extends Vue {
  tasks: any[];
  taskApi: TaskApi;
  newTaskForm: any;
  newTaskDescription: any;

  constructor(args) {
    super(args);
    this.taskApi = new TaskApi();
    this.tasks = [];
  }

  beforeMount() {
    console.log("hop")
    this.loadTasks();
  }

  submitForm(e) {
    e.preventDefault();
    console.log("foo", this.newTaskDescription);
    this.tasks = [{description: this.newTaskDescription, completed_at: null}].concat(this.tasks);
    this.newTaskDescription = null;
    // TODO: Implement this.
    this.taskApi.createTask();
  }
  loadTasks() {
    console.log("loading tasks")
    this.taskApi.getTasks().then((data: any) => {
      console.log("loaded tasks", data.data);
      this.tasks = data.data;
    });
  }
  changeTaskStatus(task) {
    if (task.completed_at != null) {
      this.taskApi.completeTask(task.id).then(() => {
        this.loadTasks();
      });
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .task-list {
    list-style: none;
    padding: 0;
  }
  .task-list li {
    line-height: 30px;
  }
  .task-list li input[type=checkbox] {
    position: relative;
    top: 2px;
    width: 40px;
  }
  .task-list input {

  }
  .completed {
    opacity: 0.7;
    margin-left: 40px
  }
  .completed .complete_date {
    font-size: smaller;
  }
</style>
