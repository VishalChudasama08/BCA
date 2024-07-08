#27 Write a python program to Queue ADT

class Queue:
    def __init__(self):
        self.items = []
    def isEmpty(self):
        return self.items==[]
    def enQueue(self,item):
        self.items.append(item)
    def deQueue(self):
        if not self.isEmpty():
            return self.items.pop(0)
        else:
            return IndexError("deQueue from empty queue")
    def peek(self):
        if not self.isEmpty():
            return self.items[0]
        else:
            return IndexError("peek from empty queue")
    def size(self):
        return len(self.items)

q=Queue()
q.enQueue(1)
q.enQueue(2)
q.enQueue(3)
print("Queue size:",q.size())
print("deQueue item:", q.deQueue())
print("peeked item:", q.peek())
print("Updated queue size:",q.size())
