const tagTemplate = (tag) => {
    const tagAttr = tag.isNew ? 'readonly' : 'disabled';
    return `
        <div class="tag-item" tagId="${tag.id}">
        <input 
            type = "text"
            class = "tag-name"
            name = "tagIds[${tag.id}]"
            value = "${tag.name}"
            ${tagAttr}
        >
        <span class="del-icon" onclick="handleDelete(${tag.id})">&#10006;<span>
        </div>`;
}

const deleteTemplate = (tagId) => {
    return `<input type = "hidden" name = "deleteTagIds[${tagId}]" value = "${tagId}">`;
}

let tagsToAdd = [];
let tagIdToDelete = 0;

const addToForm = (tagId, tagName) => {
    const tagIsNew = false;
    const tag = {
        id: tagId.toString(),
        name: tagName,
        isNew: tagIsNew
    }

    if (tagAdd(tag)) {
        tagShow(tag);
    }
}

const handleAdd = () => {
    const selector = document.getElementById('tag-select');
    const selected = selector[ selector.selectedIndex ];
    const tagIsNew = true;

    const tag = {
        id: selected.value,
        name: selected.innerHTML,
        isNew: tagIsNew
    }

    if ( tagAdd(tag) ) {
        tagShow(tag);
    }
}

const handleDelete = (tagId) => {
    if (deleteTag(tagId)) {
        removeTag(tagId);
    }
}

const tagAdd = (tag) => {
    const wasAdded = arrContain(tagsToAdd, tag.id);
    let added = false;

    if (!wasAdded) {
        tagsToAdd.push(tag);
        added = true;
    }

    return added;
}

const tagShow = (tag) => {
    const tagHtml = tagTemplate(tag);

    const tagList = document.getElementById('tag-list');
    tagList.innerHTML += tagHtml;
}

const deleteTag = (tagId) => {
    const wasAdded = arrContain(tagsToAdd, tagId);
    let deleted = false;

    if (wasAdded) {
        let tagIndex;
        tagsToAdd.forEach(tag => {
            if (tag.id == tagId) {
                tagIndex = tagsToAdd.indexOf(tag);
                if (!tag.isNew) {
                    tagIdToDelete = tag.id;
                }
            }
        });
        if (tagIndex != -1) {
            tagsToAdd.splice(tagIndex, 1);
            deleted = true;
        }
    }

    return deleted;
}

const removeTag = (tagId) => {
    let div = document.querySelector(`[tagId="${tagId}"]`);
    div.remove();

    const tagList = document.getElementById('tag-list');
    if (tagIdToDelete !== 0) {
        const tagHtml = deleteTemplate(tagIdToDelete);
        tagList.innerHTML += tagHtml;
    }
    tagIdToDelete = 0;
}

const arrContain = (tags, tagId) => {
    let contain = false;

    tags.forEach( currentTag => {
        if(currentTag.id == tagId) {
            contain = true;
        }
    });

    return contain;
}