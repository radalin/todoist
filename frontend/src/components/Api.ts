import {Configuration, TaskApi} from '@/generated-client';

const commonParams = [new  Configuration({
    apiKey: "TEST_KEY"
}), undefined, undefined];

export default {
    Task: new TaskApi(...commonParams)
}