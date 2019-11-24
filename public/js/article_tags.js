
const tagTemplate = (tagId, tagName) => {
    return `
        <div class="tag-item" tagId="${tagId}">
        <input 
            type = "text"
            class = "tag-name"
            name = "tagIds[${tagId}]"
            value = "${tagName}"
            readonly
        >
        <span class="del-icon" onclick="handleDelete(${tagId})">&#10006;<span>
        </div>`;
}

let tagIdsToAdd = [];
let tagIdsToDelete = [];

const handleAdd = () => {
    const selector = document.getElementById('tag-select');
    const selected = selector[ selector.selectedIndex ];
    const tagId = selected.value;
    const tagName = selected.innerHTML;
    if (addTag(tagId)) {
        showTag(tagId, tagName);
    }
}

const handleDelete = (tagId) => {
    if (deleteTag( tagId.toString() )) {
        removeTag(tagId);
    }
}

const addTag = (tagId) => {
    const wasAdded = tagIdsToAdd.includes(tagId);
    let added = false;

    if (!wasAdded) {
        tagIdsToAdd.push(tagId);
        added = true;
    }

    return added;
}

const showTag = (tagId, tagName) => {
    const tag = tagTemplate(tagId, tagName);

    const tagList = document.getElementById('tag-list');
    tagList.innerHTML += tag;
}

const addToForm = () => {
    if (addTag(tagId)) {
        showTag(tagId, tagName);
    }
}

const deleteTag = (tagId) => {
    let wasAdded = tagIdsToAdd.includes(tagId);
    const wasDeleted = tagIdsToDelete.includes(tagId);
    let deleted = false;

    if (wasAdded) {
        let idx = tagIdsToAdd.indexOf(tagId);
        if (idx != -1) {
            tagIdsToAdd.splice(idx, 1);
            deleted = true;
        }
    }

    /*if (!wasDeleted) {
        tagIdsToDelete.push(tagId);
        deleted = true;
    }*/

    return deleted;
}

const removeTag = (tagId) => {
    let div = document.querySelector(`[tagId="${tagId}"]`);
    div.remove();
}