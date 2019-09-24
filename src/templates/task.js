import {task} from '../model.js'

const template = `
<h1>${task.name}</h1>
<ul>
    <li> Descripció: ${task.description}</li>
    <li> completada: ${task.completed}</li>
</ul>    
`

export {template}
