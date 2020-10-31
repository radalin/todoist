// tslint:disable
/**
 * Todoist API
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.5.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


import * as globalImportUrl from 'url';
import { Configuration } from './configuration';
import globalAxios, { AxiosPromise, AxiosInstance } from 'axios';
// Some imports not used depending on template conditions
// @ts-ignore
import { BASE_PATH, COLLECTION_FORMATS, RequestArgs, BaseAPI, RequiredError } from './base';

/**
 * 
 * @export
 * @interface Task
 */
export interface Task {
    /**
     * 
     * @type {number}
     * @memberof Task
     */
    id?: number;
    /**
     * 
     * @type {string}
     * @memberof Task
     */
    description?: string;
    /**
     * 
     * @type {number}
     * @memberof Task
     */
    completed_at?: number;
    /**
     * 
     * @type {number}
     * @memberof Task
     */
    created_at?: number;
}

/**
 * TaskApi - axios parameter creator
 * @export
 */
export const TaskApiAxiosParamCreator = function (configuration?: Configuration) {
    return {
        /**
         * 
         * @summary Completes a task
         * @param {number} id ID of task to complete
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        completeTask: async (id: number, options: any = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            if (id === null || id === undefined) {
                throw new RequiredError('id','Required parameter id was null or undefined when calling completeTask.');
            }
            const localVarPath = `/tasks/{id}/complete`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            const localVarUrlObj = globalImportUrl.parse(localVarPath, true);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }
            const localVarRequestOptions = { method: 'POST', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication api_key required
            if (configuration && configuration.apiKey) {
                const localVarApiKeyValue = typeof configuration.apiKey === 'function'
                    ? await configuration.apiKey("X-TODOIST-API-KEY")
                    : await configuration.apiKey;
                localVarHeaderParameter["X-TODOIST-API-KEY"] = localVarApiKeyValue;
            }


    
            localVarUrlObj.query = {...localVarUrlObj.query, ...localVarQueryParameter, ...options.query};
            // fix override query string Detail: https://stackoverflow.com/a/7517673/1077943
            delete localVarUrlObj.search;
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};

            return {
                url: globalImportUrl.format(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * Create a new task
         * @summary Create a new task
         * @param {Task} task Create a new task
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        createTask: async (task: Task, options: any = {}): Promise<RequestArgs> => {
            // verify required parameter 'task' is not null or undefined
            if (task === null || task === undefined) {
                throw new RequiredError('task','Required parameter task was null or undefined when calling createTask.');
            }
            const localVarPath = `/tasks`;
            const localVarUrlObj = globalImportUrl.parse(localVarPath, true);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }
            const localVarRequestOptions = { method: 'POST', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication api_key required
            if (configuration && configuration.apiKey) {
                const localVarApiKeyValue = typeof configuration.apiKey === 'function'
                    ? await configuration.apiKey("X-TODOIST-API-KEY")
                    : await configuration.apiKey;
                localVarHeaderParameter["X-TODOIST-API-KEY"] = localVarApiKeyValue;
            }


    
            localVarHeaderParameter['Content-Type'] = 'application/json';

            localVarUrlObj.query = {...localVarUrlObj.query, ...localVarQueryParameter, ...options.query};
            // fix override query string Detail: https://stackoverflow.com/a/7517673/1077943
            delete localVarUrlObj.search;
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};
            const needsSerialization = (typeof task !== "string") || localVarRequestOptions.headers['Content-Type'] === 'application/json';
            localVarRequestOptions.data =  needsSerialization ? JSON.stringify(task !== undefined ? task : {}) : (task || "");

            return {
                url: globalImportUrl.format(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @summary Deletes a task
         * @param {number} id Pet id to delete
         * @param {string} [apiKey] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        deleteTask: async (id: number, apiKey?: string, options: any = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            if (id === null || id === undefined) {
                throw new RequiredError('id','Required parameter id was null or undefined when calling deleteTask.');
            }
            const localVarPath = `/tasks/{id}`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            const localVarUrlObj = globalImportUrl.parse(localVarPath, true);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }
            const localVarRequestOptions = { method: 'DELETE', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication api_key required
            if (configuration && configuration.apiKey) {
                const localVarApiKeyValue = typeof configuration.apiKey === 'function'
                    ? await configuration.apiKey("X-TODOIST-API-KEY")
                    : await configuration.apiKey;
                localVarHeaderParameter["X-TODOIST-API-KEY"] = localVarApiKeyValue;
            }

            if (apiKey !== undefined && apiKey !== null) {
                localVarHeaderParameter['api_key'] = String(apiKey);
            }


    
            localVarUrlObj.query = {...localVarUrlObj.query, ...localVarQueryParameter, ...options.query};
            // fix override query string Detail: https://stackoverflow.com/a/7517673/1077943
            delete localVarUrlObj.search;
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};

            return {
                url: globalImportUrl.format(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * Return a list of tasks
         * @summary List tasks
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        getTasks: async (options: any = {}): Promise<RequestArgs> => {
            const localVarPath = `/tasks`;
            const localVarUrlObj = globalImportUrl.parse(localVarPath, true);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }
            const localVarRequestOptions = { method: 'GET', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;


    
            localVarUrlObj.query = {...localVarUrlObj.query, ...localVarQueryParameter, ...options.query};
            // fix override query string Detail: https://stackoverflow.com/a/7517673/1077943
            delete localVarUrlObj.search;
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};

            return {
                url: globalImportUrl.format(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * Update an existing task by Id
         * @summary Update an existing task
         * @param {number} id Task id to delete
         * @param {Task} task Update an existent task
         * @param {string} [apiKey] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        updateTask: async (id: number, task: Task, apiKey?: string, options: any = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            if (id === null || id === undefined) {
                throw new RequiredError('id','Required parameter id was null or undefined when calling updateTask.');
            }
            // verify required parameter 'task' is not null or undefined
            if (task === null || task === undefined) {
                throw new RequiredError('task','Required parameter task was null or undefined when calling updateTask.');
            }
            const localVarPath = `/tasks/{id}`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            const localVarUrlObj = globalImportUrl.parse(localVarPath, true);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }
            const localVarRequestOptions = { method: 'PUT', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication api_key required
            if (configuration && configuration.apiKey) {
                const localVarApiKeyValue = typeof configuration.apiKey === 'function'
                    ? await configuration.apiKey("X-TODOIST-API-KEY")
                    : await configuration.apiKey;
                localVarHeaderParameter["X-TODOIST-API-KEY"] = localVarApiKeyValue;
            }

            if (apiKey !== undefined && apiKey !== null) {
                localVarHeaderParameter['api_key'] = String(apiKey);
            }


    
            localVarHeaderParameter['Content-Type'] = 'application/json';

            localVarUrlObj.query = {...localVarUrlObj.query, ...localVarQueryParameter, ...options.query};
            // fix override query string Detail: https://stackoverflow.com/a/7517673/1077943
            delete localVarUrlObj.search;
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};
            const needsSerialization = (typeof task !== "string") || localVarRequestOptions.headers['Content-Type'] === 'application/json';
            localVarRequestOptions.data =  needsSerialization ? JSON.stringify(task !== undefined ? task : {}) : (task || "");

            return {
                url: globalImportUrl.format(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
    }
};

/**
 * TaskApi - functional programming interface
 * @export
 */
export const TaskApiFp = function(configuration?: Configuration) {
    return {
        /**
         * 
         * @summary Completes a task
         * @param {number} id ID of task to complete
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async completeTask(id: number, options?: any): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<Task>> {
            const localVarAxiosArgs = await TaskApiAxiosParamCreator(configuration).completeTask(id, options);
            return (axios: AxiosInstance = globalAxios, basePath: string = BASE_PATH) => {
                const axiosRequestArgs = {...localVarAxiosArgs.options, url: basePath + localVarAxiosArgs.url};
                return axios.request(axiosRequestArgs);
            };
        },
        /**
         * Create a new task
         * @summary Create a new task
         * @param {Task} task Create a new task
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async createTask(task: Task, options?: any): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<Task>> {
            const localVarAxiosArgs = await TaskApiAxiosParamCreator(configuration).createTask(task, options);
            return (axios: AxiosInstance = globalAxios, basePath: string = BASE_PATH) => {
                const axiosRequestArgs = {...localVarAxiosArgs.options, url: basePath + localVarAxiosArgs.url};
                return axios.request(axiosRequestArgs);
            };
        },
        /**
         * 
         * @summary Deletes a task
         * @param {number} id Pet id to delete
         * @param {string} [apiKey] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async deleteTask(id: number, apiKey?: string, options?: any): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<void>> {
            const localVarAxiosArgs = await TaskApiAxiosParamCreator(configuration).deleteTask(id, apiKey, options);
            return (axios: AxiosInstance = globalAxios, basePath: string = BASE_PATH) => {
                const axiosRequestArgs = {...localVarAxiosArgs.options, url: basePath + localVarAxiosArgs.url};
                return axios.request(axiosRequestArgs);
            };
        },
        /**
         * Return a list of tasks
         * @summary List tasks
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async getTasks(options?: any): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<Task>> {
            const localVarAxiosArgs = await TaskApiAxiosParamCreator(configuration).getTasks(options);
            return (axios: AxiosInstance = globalAxios, basePath: string = BASE_PATH) => {
                const axiosRequestArgs = {...localVarAxiosArgs.options, url: basePath + localVarAxiosArgs.url};
                return axios.request(axiosRequestArgs);
            };
        },
        /**
         * Update an existing task by Id
         * @summary Update an existing task
         * @param {number} id Task id to delete
         * @param {Task} task Update an existent task
         * @param {string} [apiKey] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async updateTask(id: number, task: Task, apiKey?: string, options?: any): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<Task>> {
            const localVarAxiosArgs = await TaskApiAxiosParamCreator(configuration).updateTask(id, task, apiKey, options);
            return (axios: AxiosInstance = globalAxios, basePath: string = BASE_PATH) => {
                const axiosRequestArgs = {...localVarAxiosArgs.options, url: basePath + localVarAxiosArgs.url};
                return axios.request(axiosRequestArgs);
            };
        },
    }
};

/**
 * TaskApi - factory interface
 * @export
 */
export const TaskApiFactory = function (configuration?: Configuration, basePath?: string, axios?: AxiosInstance) {
    return {
        /**
         * 
         * @summary Completes a task
         * @param {number} id ID of task to complete
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        completeTask(id: number, options?: any): AxiosPromise<Task> {
            return TaskApiFp(configuration).completeTask(id, options).then((request) => request(axios, basePath));
        },
        /**
         * Create a new task
         * @summary Create a new task
         * @param {Task} task Create a new task
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        createTask(task: Task, options?: any): AxiosPromise<Task> {
            return TaskApiFp(configuration).createTask(task, options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @summary Deletes a task
         * @param {number} id Pet id to delete
         * @param {string} [apiKey] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        deleteTask(id: number, apiKey?: string, options?: any): AxiosPromise<void> {
            return TaskApiFp(configuration).deleteTask(id, apiKey, options).then((request) => request(axios, basePath));
        },
        /**
         * Return a list of tasks
         * @summary List tasks
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        getTasks(options?: any): AxiosPromise<Task> {
            return TaskApiFp(configuration).getTasks(options).then((request) => request(axios, basePath));
        },
        /**
         * Update an existing task by Id
         * @summary Update an existing task
         * @param {number} id Task id to delete
         * @param {Task} task Update an existent task
         * @param {string} [apiKey] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        updateTask(id: number, task: Task, apiKey?: string, options?: any): AxiosPromise<Task> {
            return TaskApiFp(configuration).updateTask(id, task, apiKey, options).then((request) => request(axios, basePath));
        },
    };
};

/**
 * TaskApi - object-oriented interface
 * @export
 * @class TaskApi
 * @extends {BaseAPI}
 */
export class TaskApi extends BaseAPI {
    /**
     * 
     * @summary Completes a task
     * @param {number} id ID of task to complete
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof TaskApi
     */
    public completeTask(id: number, options?: any) {
        return TaskApiFp(this.configuration).completeTask(id, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * Create a new task
     * @summary Create a new task
     * @param {Task} task Create a new task
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof TaskApi
     */
    public createTask(task: Task, options?: any) {
        return TaskApiFp(this.configuration).createTask(task, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @summary Deletes a task
     * @param {number} id Pet id to delete
     * @param {string} [apiKey] 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof TaskApi
     */
    public deleteTask(id: number, apiKey?: string, options?: any) {
        return TaskApiFp(this.configuration).deleteTask(id, apiKey, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * Return a list of tasks
     * @summary List tasks
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof TaskApi
     */
    public getTasks(options?: any) {
        return TaskApiFp(this.configuration).getTasks(options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * Update an existing task by Id
     * @summary Update an existing task
     * @param {number} id Task id to delete
     * @param {Task} task Update an existent task
     * @param {string} [apiKey] 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof TaskApi
     */
    public updateTask(id: number, task: Task, apiKey?: string, options?: any) {
        return TaskApiFp(this.configuration).updateTask(id, task, apiKey, options).then((request) => request(this.axios, this.basePath));
    }

}


