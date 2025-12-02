import 'package:flutter/material.dart';

class ChatPage extends StatelessWidget {
  const ChatPage({super.key});

  @override
  Widget build(BuildContext context) {
    return ListView.builder(
      itemCount: 10, // Dummy data
      itemBuilder: (context, index) {
        return ListTile(
          leading: const CircleAvatar(
            backgroundImage: AssetImage('assets/profile.jpg'),
          ),
          title: Text('Chat ${index + 1}'),
          subtitle: const Text('Last message'),
          trailing: const Text('10:00 AM'),
        );
      },
    );
  }
}
