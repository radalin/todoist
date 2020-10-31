import {Task} from "@/generated-client";

export default class TaskModel implements Task {

    id?:number;
    description?:string;
    completed_at?: number;

    public constructor(description?: string) {
        this.description = description;
    }
}