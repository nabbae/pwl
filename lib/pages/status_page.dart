import 'package:flutter/material.dart';

class StatusPage extends StatelessWidget {
  const StatusPage({super.key});

  @override
  Widget build(BuildContext context) {
    return ListView.builder(
      itemCount: 5, // Dummy data
      itemBuilder: (context, index) {
        return ListTile(
          leading: const CircleAvatar(
            backgroundImage: AssetImage('assets/profile.jpg'),
          ),
          title: Text('Status ${index + 1}'),
          subtitle: const Text('Today, 10:30 AM'),
        );
      },
    );
  }
}
