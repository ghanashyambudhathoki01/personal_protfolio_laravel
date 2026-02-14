class ModernRTE {
    constructor(editorId, textareaId) {
        this.editor = document.getElementById(editorId);
        this.textarea = document.getElementById(textareaId);
        this.buttons = document.querySelectorAll('.rte-btn[data-command]');

        this.init();
    }

    init() {
        // Handle input events
        this.editor.addEventListener('input', () => this.sync());

        // Handle selection events to update button states
        document.addEventListener('selectionchange', () => this.updateToolbar());

        // Initial sync
        this.sync();
    }

    exec(command, value = null) {
        document.execCommand(command, false, value);
        this.sync();
        this.editor.focus();
    }

    sync() {
        this.textarea.value = this.editor.innerHTML;
    }

    updateToolbar() {
        if (document.activeElement !== this.editor) return;

        this.buttons.forEach(btn => {
            const command = btn.dataset.command;
            if (document.queryCommandState(command)) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }
}

// Global initialization helper
window.initModernRTE = (editorId, textareaId) => {
    return new ModernRTE(editorId, textareaId);
};

window.rteAction = (btn, command, value = null) => {
    if (command === 'createLink' && !value) {
        value = prompt('Enter URL:');
        if (!value) return;
    }
    document.execCommand(command, false, value);
    // Trigger input event to sync
    const editor = document.getElementById('editor-content');
    if (editor) {
        editor.dispatchEvent(new Event('input'));
    }
};
