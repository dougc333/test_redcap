export default {
    ui_ids: [],
    from: '',
    subject: '',
    message: '',
    sending: false,
    errors(state) {
        const errors = {
            from: [],
            subject: [],
            message: [],
            to: [],
        }
        const { from='', subject='', message=''} = state
        const to =  [...store?.users?.selectedUsers] || []
        if(from.trim()==='') errors.from.push(`a 'from' email must be selected`)
        if(subject.trim()==='') errors.subject.push(`subject cannot be empty`)
        if(message.trim()==='') errors.message.push(`message cannot be empty`)
        if(to.length==0) errors.to.push(`you must select at least 1 recipient`)
        return errors
    },
}