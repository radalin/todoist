<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Todoist</h1>
          <!-- Yeah yeah, Emily in Paris reference... -->
          <h3>A simple task list for ringardes</h3>
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
            <li v-for="task in uncompletedTasks" :key="task.id">
              <div>
                <input type="checkbox" v-on:change="completeTask(task)" />{{ task.description }}
              </div>
            </li>
            <li v-for="task in completedTasks" :key="task.id">
              <div class="completed">
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
import TaskModel from "@/components/TaskModel";
import Api from '@/components/Api';
import moment from "moment";

export default class TaskList extends Vue {
  uncompletedTasks: any[];
  completedTasks: any[];
  taskApi: any;
  newTaskForm: any;
  newTaskDescription: any;

  constructor(args) {
    super(args);
    this.taskApi = Api.Task;
    this.uncompletedTasks = [];
    this.completedTasks = [];
  }

  beforeMount() {
    console.log("hop")
    this.loadTasks();
  }

  submitForm(e) {
    e.preventDefault();
    let t = new TaskModel(this.newTaskDescription);
    this.uncompletedTasks = [t].concat(this.uncompletedTasks);
    this.newTaskDescription = null;
    this.taskApi.createTask(t).then((data) => {
      t.id = data.data.id;
    });
  }
  completeTask(task) {
    this.taskApi.completeTask(task.id).then((data) => {
      console.log(data);
      if (data.status == 200) {
        // TODO: create a nice effect to move it to the bottom of the uncompletedTasks that will be completed...
        task.completed_at = moment(new Date()).format("YYYY-MM-DD hh:mm:ss");
        var idx = this.uncompletedTasks.findIndex((e) => e.id === task.id);
        if (idx > -1) {
          this.uncompletedTasks.splice(idx, 1);
        }
        this.completedTasks = [task].concat(this.completedTasks);
      }
    })
  }
  loadTasks() {
    console.log("loading uncompletedTasks")
    this.taskApi.getTasks().then((data: any) => {
      console.log("loaded uncompletedTasks", data.data);
      for (var i = 0; i < data.data.length; i++) {
        var item = data.data[i];
        if (item.completed_at === null) {
          this.uncompletedTasks.push(item);
        } else {
          this.completedTasks.push(item);
        }
      }
    });
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
